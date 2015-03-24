package com.example.WizardBatle_Game.game_core.Player_res;

import android.graphics.*;
import com.example.WizardBatle_Game.game_core.Monster;

import java.util.ArrayList;

/**
 * Created by wolfpro on 2/6/15.
 */
public class Player {
    private static String[] def_type = {"warrior", "hunter", "engineer"};
    private static int[] def_war_cost = {40, 100, 250, 1000};
    private Bitmap[] def_bitmap;
    private Tower tower;
    private Lider lider;
    private int id, width, heght;
    private int money;

    private boolean on_blind;
    private Rect src, dst;
    private Paint paint;

    private int FPS;


    private static String level = "Lev: ";
    private static String buy = "BUY";

    private ArrayList<Monster> buffer;

    private boolean magic_one, magic_two;
    private int time_mag_one;
    private int time_andim = 0;

    public Player(int id, Bitmap[] def_bitmap, Bitmap tower_bitmap, int t_height, long now_d, int FPS) {
        this.id = id;
        buffer = new ArrayList<Monster>();
        tower = new Tower(id, def_bitmap, tower_bitmap, t_height, now_d);
        tower.build(0);
        lider = new Lider();
        on_blind = false;
        src = null;
        dst = null;
        width = 0;
        heght = 0;
        paint = new Paint();
        paint.setColor(Color.RED);

        magic_one = false;
        magic_two = false;
        this.FPS = FPS;
        time_mag_one = FPS;
    }

    public void setMaxWidth(int sh) {
        tower.setMaxWidth(sh);
    }

    public void upgrade(long now_d) {
        buffer = tower.make_monster(now_d);

        if (src == null || dst == null) {
            src = new Rect(0, 0, heght * 2 / 3, heght / 3);
            dst = new Rect(heght * 2 / 3, 0, heght / 6, heght / 6);
        }

        if (on_blind) {
            src = new Rect(0, 0, heght * 2 / 3, heght / 3);
            dst = new Rect(heght * 2 / 3, 0, heght / 6 + heght * 2 / 3, heght / 6);


        } else {
            src = new Rect(0, 0, 0, 0);
            dst = new Rect(0, 0, heght / 6, heght / 6);
        }
    }

    public ArrayList<Monster> get_buff() {
        return buffer;
    }

    private int min(int a, int b) {
        if (a < b)
            return a;
        return b;
    }

    private void draw_money(int id, Canvas canvas) {
        canvas.drawText("$ " + String.valueOf(money), (float) (id * (width - (String.valueOf(money).length()) * paint.getTextSize() * 0.7 - 0.7 * paint.getTextSize())), heght * 2 / 9, paint);
    }

    private void draw_block_war(int id, Canvas canvas) {
        int K = (id) * (width - src.right);
        canvas.drawText(def_type[0], K + paint.getTextSize() / 2, paint.getTextSize(), paint);
        canvas.drawText(level + tower.getLev(0), K + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
        canvas.drawRect(K + 4, 3 * paint.getTextSize() - 2, K + src.right / 3 - 2, src.bottom - 2, paint);

        paint.setColor(Color.BLACK);
        canvas.drawText("Up", K * id + src.right / 9, (3 * paint.getTextSize() + src.bottom) / 2, paint);
        paint.setColor(Color.WHITE);
    }

    private void draw_block_sniper(int id, Canvas canvas) {
        int K = (id) * (width - src.right);
        if (tower.getValSpawn() > 1) {
            canvas.drawText(def_type[1], K + src.right / 3 + paint.getTextSize() / 2, paint.getTextSize(), paint);
            canvas.drawText(level + tower.getLev(1), K + src.right / 3 + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
            canvas.drawRect(K + src.right / 3 + 2, 3 * paint.getTextSize() - 2, K + src.right * 2 / 3 - 2, src.bottom - 2, paint);

            paint.setColor(Color.BLACK);
            canvas.drawText("Up", K + src.right / 3 + paint.getTextSize() * 5 / 4, (3 * paint.getTextSize() + src.bottom) / 2, paint);
            paint.setColor(Color.WHITE);
        } else {
            paint.setColor(Color.GRAY);
            canvas.drawRect(K + src.right / 3 + 2, 2, K + src.right * 2 / 3 - 2, src.bottom - 2, paint);
            paint.setColor(Color.MAGENTA);
            canvas.drawText("BUY", K + src.right / 3 + paint.getTextSize(), 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
            paint.setColor(Color.WHITE);
        }
    }

    private void draw_engineer(int id, Canvas canvas) {
        int K = id * (width - src.right);
        if (tower.getValSpawn() > 2) {
            canvas.drawText(def_type[2], K + src.right * 2 / 3, paint.getTextSize(), paint);
            canvas.drawText(level + tower.getLev(0), K + src.right * 2 / 3 + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
            canvas.drawRect(K + src.right * 2 / 3 + 2, 3 * paint.getTextSize() - 2, K + src.right - 4, src.bottom - 2, paint);

            paint.setColor(Color.BLACK);
            canvas.drawText("Up", K + src.right * 7 / 9, (3 * paint.getTextSize() + src.bottom) / 2, paint);
            paint.setColor(Color.WHITE);
        } else {
            paint.setColor(Color.GRAY);
            canvas.drawRect(K + src.right * 2 / 3 + 2, 2, K + src.right - 4, src.bottom - 2, paint);
            paint.setColor(Color.MAGENTA);
            canvas.drawText("BUY", K + src.right * 2 / 3 + paint.getTextSize(), 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
            paint.setColor(Color.WHITE);
        }
    }

    private void draw_circle(int id, Canvas canvas) {
        int k = id * (width - heght / 2);
        paint.setColor(Color.BLUE);
        canvas.drawCircle(heght / 4 + k, heght * 11 / 12, heght / 12, paint);
        paint.setColor(Color.CYAN);
        canvas.drawCircle(heght / 4 + k, heght * 11 / 12, heght / 14, paint);
    }

    public void onDraw(Canvas canvas) {
        if (width == 0 || heght == 0) {
            width = canvas.getWidth();
            heght = canvas.getHeight();
            heght = min(heght, width / 2);//for balance;
            paint.setTextSize(heght / 18);
        }

        paint.setColor(Color.DKGRAY);
        int k = (id) * (width - src.right);
        canvas.drawRect(k, src.top, k + src.right, src.bottom, paint);

        paint.setColor(Color.YELLOW);
        draw_money(id, canvas);

        paint.setColor(Color.RED);//red_box
        if (id == 0)
            canvas.drawRect(dst, paint);
        if (id == 1)
            canvas.drawRect(width - dst.right, dst.top, width - src.right, dst.bottom, paint);

        if (on_blind) {
            paint.setTextSize(min(heght / 9, src.right / 12));
            paint.setColor(Color.WHITE);

            /**Block about a first type - tank */
            draw_block_war(id, canvas);

            /**Block about a second type - sniper*/
            draw_block_sniper(id, canvas);

            /**Block about a second type - engineer*/
            draw_engineer(id, canvas);


        }

        /**Block of Magic */
        if (magic_one) {
            if (time_andim <= 0)
                time_andim = time_mag_one;

            paint.setColor(Color.WHITE);
            for (int i = 0; i < width; i += (width / FPS)) {
                paint.setAlpha(255 * time_andim / time_mag_one);
                canvas.drawRect(i, 0, (i + time_mag_one - time_andim), canvas.getHeight(), paint);
                //System.out.println("id:" + id);
            }

            time_andim--;
            magic_one = (time_andim > 0);
        }
        paint.setAlpha(255);

        draw_circle(id, canvas);

        tower.onDraw(canvas);
    }

    public boolean get_magic_one() {
        if (time_andim >= FPS - 1)
            return magic_one;
        return false;
    }

    public int get_magic_one_def() {
        return 4;
    }

    private boolean in_rect(int x, int y, Rect r) {
        return (r.left < x && x < r.right && r.top < y && y < r.bottom);
    }

    public void add_money(long i) {
        money += (int) i;
    }

    public void onTuch(int x, int y) {

        /**Block about blond */
        if (on_blind && ((dst.left < x && x < dst.right) && (id == 0) || (width - dst.right < x && x < width - dst.left) && (id == 1)) && y < dst.bottom) {
            src = new Rect(0, 0, heght * 2 / 3, heght / 3);
            on_blind = !on_blind;
        } else {
            if (!on_blind && ((x < dst.right) && (id == 0) || (width - dst.right < x && x < width - dst.left) && (id == 1)) && y < dst.bottom) {
                src = new Rect(0, 0, 0, 0);
                on_blind = !on_blind;
            }
        }

        /**Block about upgrade */
        int K = (id) * (width - src.right);
        if (in_rect(x, y, new Rect(K + 4, (int) (3 * paint.getTextSize() - 2), K + src.right / 3 - 2, src.bottom - 2))) {
            if (money - def_war_cost[tower.getLev(0) % def_war_cost.length] > 0) {
                money -= def_war_cost[tower.getLev(0) % def_war_cost.length];
                tower.upgrade(0);
            }
        }

        /**Block about skills of Player */
        K = id * (width - heght / 2);

        int a = x - (K + heght / 4), b = y - (heght * 11 / 12), r = heght / 12;
        if (a * a + b * b <= r * r) {
            magic_one = true;
            //System.out.printf("Click");
        }


    }
}