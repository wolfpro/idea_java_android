package com.example.WizardBatle_Game.game_core;

import android.graphics.*;

import java.util.Vector;

/**
 * Created by wolfpro on 2/6/15.
 */
public class Monster {
    private static String[] def_type = {"warrior", "engineer", "medic"};

    private Bitmap bmp;

    private static long[] def_cooldown = {2000, 1800, 1600, 1400, 1300, 1200, 1150, 1100, 1050, 1000, 950, 900, 850, 800, 750, 700, 650, 600, 550, 500, 450, 400, 350, 300, 250, 200};
    private int id;//name owner;
    private String type;
    private int level;
    private int hp;
    private int mp;//skill;
    private int speed;
    private int position;
    private int height, width, bmp_width;
    private boolean live;
    private Rect src, dst;
    private boolean move;
    private long last_d;
    private long def;

    private Vector<Pair> val_def;

    private Paint p;
    private int how_red;

    /**
     * Рядков в спрайте = 4
     */
    private static final int BMP_ROWS = 4;
    /**
     * Колонок в спрайте = 3
     */
    private static final int BMP_COLUMNS = 3;
    private int cur_Frame;

    public class Pair {
        int f, s;

        public Pair(int f, int s) {
            this.f = f;
            this.s = s;
        }

    }

    public Monster(Bitmap bmp, int id, String type, int level, int hp, int mp, int speed, int position) {
        this.bmp = bmp;

        height = bmp.getHeight() / BMP_ROWS;
        width = bmp.getWidth() / BMP_COLUMNS;

        bmp_width = width;

        src = new Rect(0, 0, width, height);
        dst = null;

        live = true;
        this.id = id;
        this.type = type;
        this.level = level;
        this.hp = hp;
        this.mp = mp;
        this.speed = speed;
        this.position = position;
        move = true;
        last_d = 0;
        def = 1;
        cur_Frame = 0;
        how_red = 0;

        p = new Paint();
        p.setColor(Color.RED);
        p.setTextSize(height * 2 / 3);
        p.setTextScaleX(4 / 2);

        val_def = new Vector<Pair>();
    }

    public void update() {
        cur_Frame = ++cur_Frame;

        if (type.equals(def_type[0])) {
            def = 1 + level;
        }

        for (Pair i : val_def) {
            if (i.f > 0)
                i.s++;
        }
        for (int i = 0; i < val_def.size(); ++i) {
            if (val_def.get(i).s > 35) {
                val_def.remove(i);
            }
        }

        if (move) {
            position += speed;
        }
        dst = new Rect(position, 0, position + width, height);

        int srcX = (cur_Frame * 10 / 35) % BMP_COLUMNS * bmp.getWidth() / BMP_COLUMNS;
        int srcY = bmp.getHeight() * (2 - id) / BMP_ROWS;

        src = new Rect(srcX, srcY, srcX + bmp.getWidth() / BMP_COLUMNS, srcY + bmp.getHeight() / BMP_ROWS);
        dst = new Rect(position, 0, position + width, height);

    }

    public void onDraw(Canvas canvas) {
        update();
        dst.set(dst.left, canvas.getHeight() * 2 / 3 - height, dst.right, dst.bottom + canvas.getHeight() * 2 / 3 - height);

        canvas.drawBitmap(bmp, src, dst, p);

        for (Pair i : val_def) {
            p.setAlpha(255 - 255 * i.s / 35);
            canvas.drawText(String.valueOf(i.f), position + dst.height() / 2, dst.top - i.s - dst.height() / 5, p);
        }

        if (how_red > 0) {
            p.setAlpha(100);
            how_red--;
        } else
            p.setAlpha(255);
    }

    public void attack(long def) {
        move = false;

        this.hp -= def;
        if (def > 0) {
            val_def.add(new Pair((int) def, 0));
        }

        if (def > 0)
            how_red += 3;

        if (hp < 0)
            this.live = false;
        if (!live) {
            System.out.println("Death! " + id);
        }

    }

    public long get_def(long now_d) {
        if (now_d - last_d >= def_cooldown[this.level] / 4 && live) {
            last_d = now_d;
            return def;
        }
        return 0;
    }

    //set
    public void setBmp(Bitmap bmp) {
        this.bmp = bmp;
    }

    public void setKsize(double k) {
        width = (int) (k);
        height = (int) ((k / bmp_width) * height);
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setType(String type) {
        this.type = type;
    }

    public void setLevel(int level) {
        this.level = level;
    }

    public void setHp(int hp) {
        this.hp = hp;
    }

    public void setMp(int mp) {
        this.mp = mp;
    }

    public void setSpeed(int speed) {
        this.speed = speed;
    }

    public void setPosition(int position) {
        this.position = position;
    }

    public void setHeight(int height) {
        this.height = height;
    }

    public void setWidth(int width) {
        this.width = width;
    }

    public void setLive(boolean live) {
        this.live = live;
    }

    public void setMove(boolean move) {
        this.move = move;
    }

    //get
    public int getId() {
        return id;
    }

    public String getType() {
        return type;
    }

    public int getLevel() {
        return level;
    }

    public int getHp() {
        return hp;
    }

    public int getMp() {
        return mp;
    }

    public int getPosition() {
        return position;
    }

    public int getSpeed() {
        return speed;
    }

    public int getHeight() {
        return height;
    }

    public int getWidth() {
        return width;
    }

    public boolean is_live() {
        return live;
    }

    public boolean getMove() {
        return move;
    }

}
