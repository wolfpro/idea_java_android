package com.example.WizardBatle_Game.game_core.Player_res;

import android.graphics.Bitmap;
import com.example.WizardBatle_Game.game_core.Monster;

/**
 * Created by wolfpro on 2/6/15.
 */
public class Spawn {
    private static String[] def_type = {"warrior", "hunter", "engineer"};
    //the make monster cooldown
    private static long[] def_cooldown = {5000, 4500, 4000, 3500, 3250, 3000, 2875, 2750, 2625, 2500, 2375, 2250, 2125, 2000, 1875, 1750, 1625, 1500, 1375, 1250, 1125, 1000, 875, 750, 625, 500};
    private static int MAX_LEVEL = 26;
    private Bitmap[] def_bitmap;
    private String type;//warrior, engineer,medic;
    private int init;
    private int count;
    private double make_coord;

    private int id;//name owner;
    private int level;
    private int hp;
    private int mp;//skill;
    private int speed;
    private int position;
    private int height, width;
    private long cooldown; //5 4 3 2 1....
    private long last_d;//when make monster;
    private int can_height;

    public Spawn(int arg, int id, Bitmap[] def_bitmap, int can_height) {
        this.def_bitmap = def_bitmap;
        this.id = id;
        this.can_height = can_height;
        init = arg;
        type = def_type[arg];
        level = 0;
        count = 1;
        make_coord = 0;

        hp = 2 + level * hp;//no end...
        mp = 1 + level * mp;
        speed = 2;
        position = -def_bitmap[0].getHeight();

        if (id == 1) {
            speed = (int) -2;
            position = can_height + def_bitmap[0].getHeight();
        }

        last_d = 0;
        cooldown = def_cooldown[0];
    }

    public Monster make_monster() {
        return new Monster(def_bitmap[init], id, type, level, hp, mp, speed, position);
    }

    public long get_cooldown() {
        return cooldown;
    }

    public boolean is_not_cooldown(long now_d) {
        if (now_d - last_d > cooldown) {
            last_d = now_d;
            return true;
        }
        return false;

    }

    public void setMaxWidth(int sh) {
        this.can_height = sh;

        if (id == 1) {
            speed = (int) (-level * 0.8 - 2);
            position = can_height + def_bitmap[0].getHeight();
        }
    }

    public String getType() {
        return type;
    }

    public int getLevel() {
        return level;
    }

    public int getCount() {
        return count;
    }

    public void setType(int t) {
        type = def_type[t];
    }

    public void setLevel(int l) {
        level = l;
    }

    public void lev_up() {
        if (level <= MAX_LEVEL)
            level++;
        cooldown = def_cooldown[level];

        hp = 2 + level * hp;//no end...
        mp = 1 + level * mp;
        speed = (int) ((level) * 0.25 + 2);

        if (id == 1) {
            speed = (int) (-(level) * 0.25 - 2);
            position = can_height + def_bitmap[0].getHeight();
        }
    }

    public void setCount(int c) {
        count = c;
    }

    public void cou_uo() {
        count++;
    }

}
