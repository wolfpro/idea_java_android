package com.example.WizardBatle_Game.game_core.Player_res;

import android.graphics.Bitmap;
import android.graphics.Canvas;
import android.graphics.Paint;
import android.graphics.Rect;
import com.example.WizardBatle_Game.game_core.Monster;

import java.util.ArrayList;

/**
 * Created by wolfpro on 2/6/15.
 */
public class Tower {
    private ArrayList<Spawn> spawns;
    private ArrayList<Monster> buff;
    private int id, t_height;
    private Bitmap[] t;
    private Rect src, dst;
    private Bitmap towe_bitmap;
    private Paint p;


    private long now_d, last_d;

    public Tower(int id, Bitmap[] t, Bitmap tower_bitmap, int t_height, long now_d) {
        this.towe_bitmap = tower_bitmap;
        this.id = id;
        this.t = t;
        this.t_height = t_height;
        this.now_d = now_d;

        spawns = new ArrayList<Spawn>();
        buff = new ArrayList<Monster>();
        src = new Rect(0, 0, towe_bitmap.getWidth(), towe_bitmap.getHeight());
        dst = new Rect(0, 0, 0, 0);
        p = new Paint();
    }

    void build(int type) {
        spawns.add(new Spawn(type, id, t, t_height));
    }

    public ArrayList<Monster> make_monster(long now_d) {
        this.now_d = now_d;
        for (Spawn i : spawns) {
            if (i.is_not_cooldown(now_d)) {
                buff.add(i.make_monster());
            }
        }

        last_d = now_d;
        return buff;
    }

    public void setMaxWidth(int sh) {
        this.t_height = sh;
        for (Spawn s : spawns) {
            s.setMaxWidth(sh);
        }
    }

    public int getLev(int i) {
        if (i < spawns.size())
            return spawns.get(i).getLevel();
        return 0;
    }

    public int getValSpawn() {
        return spawns.size();
    }

    void destroy(int i) {
        spawns.remove(i);
    }

    void upgrade(int i) {
        spawns.get(i).lev_up();
    }

    void onDraw(Canvas canvas) {

        if (dst.right == 0) {
            int w = canvas.getHeight() / 3 / towe_bitmap.getHeight() * towe_bitmap.getWidth();
            int h = canvas.getHeight() * 2 / 3;
            if (id == 0)
                dst.set(0, canvas.getHeight() / 3, w, h);
            if (id == 1) {
                dst.set(canvas.getWidth() - w, canvas.getHeight()/3, canvas.getWidth(), h);
            }
        }
        canvas.drawBitmap(towe_bitmap, src, dst, p);
    }
}
