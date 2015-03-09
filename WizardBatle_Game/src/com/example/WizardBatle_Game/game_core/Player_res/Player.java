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


    private static String level = "Lev: ";
    private static String buy = "BUY";

    private ArrayList<Monster> buffer;

    public Player(int id, Bitmap[] def_bitmap, Bitmap tower_bitmap, int t_height, long now_d) {
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

    public void onDraw(Canvas canvas) {
        if (width == 0 || heght == 0) {
            width = canvas.getWidth();
            heght = canvas.getHeight();
            heght = min(heght, width / 2);//for balance;
            paint.setTextSize(heght * 2 / 27);
        }

        if (src.width() > 0)
            paint.setTextSize(min(heght / 9, src.right / 12));


        paint.setColor(Color.DKGRAY);
        if (id == 0) {
            canvas.drawRect(src, paint);
        } else {
            canvas.drawRect(width - src.right, src.top, width, src.bottom, paint);
        }

        paint.setColor(Color.YELLOW);
        if (id == 0) {
            canvas.drawText("$ " + String.valueOf(money), 0, heght * 2 / 9, paint);
        } else {
            canvas.drawText("$ " + String.valueOf(money), (float) (width - (String.valueOf(money).length()) * paint.getTextSize() * 0.7 - 0.7 * paint.getTextSize()), heght * 2 / 9, paint);
        }

        paint.setColor(Color.RED);
        if (id == 0)
            canvas.drawRect(dst, paint);
        else {
            canvas.drawRect(width - dst.right, dst.top, width - src.right, dst.bottom, paint);
        }

        if (on_blind && id == 0) {
            paint.setTextSize(min(heght / 9, src.right / 12));
            paint.setColor(Color.WHITE);

            /**Bloc about a first type - tank */
            canvas.drawText(def_type[0], paint.getTextSize() / 2, paint.getTextSize(), paint);
            canvas.drawText(level + tower.getLev(0), paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
            canvas.drawRect(4, 3 * paint.getTextSize() - 2, src.right / 3 - 2, src.bottom - 2, paint);

            paint.setColor(Color.BLACK);
            canvas.drawText("Up", src.right / 9, (3 * paint.getTextSize() + src.bottom) / 2, paint);

            paint.setColor(Color.WHITE);

            /**Bloc about a second type - sniper*/
            if (tower.getValSpawn() > 1) {
                canvas.drawText(def_type[1], src.right / 3 + paint.getTextSize() / 2, paint.getTextSize(), paint);
                canvas.drawText(level + tower.getLev(1), src.right / 3 + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                canvas.drawRect(src.right / 3 + 2, 3 * paint.getTextSize() - 2, src.right * 2 / 3 - 2, src.bottom - 2, paint);

                paint.setColor(Color.BLACK);
                canvas.drawText("Up", src.right / 3 + paint.getTextSize() * 5 / 4, (3 * paint.getTextSize() + src.bottom) / 2, paint);
                paint.setColor(Color.WHITE);
            } else {
                paint.setColor(Color.GRAY);
                canvas.drawRect(src.right / 3 + 2, 2, src.right * 2 / 3 - 2, src.bottom - 2, paint);
                paint.setColor(Color.MAGENTA);
                canvas.drawText("BUY", src.right / 3 + paint.getTextSize(), 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                paint.setColor(Color.WHITE);
            }
            /**Bloc about a second type - engineer*/
            if (tower.getValSpawn() > 2) {
                canvas.drawText(def_type[2], src.right * 2 / 3, paint.getTextSize(), paint);
                canvas.drawText(level + tower.getLev(0), src.right * 2 / 3 + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                canvas.drawRect(src.right * 2 / 3 + 2, 3 * paint.getTextSize() - 2, src.right - 4, src.bottom - 2, paint);

                paint.setColor(Color.BLACK);
                canvas.drawText("Up", src.right * 7 / 9, (3 * paint.getTextSize() + src.bottom) / 2, paint);
                paint.setColor(Color.WHITE);
            } else {
                paint.setColor(Color.GRAY);
                canvas.drawRect(src.right * 2 / 3 + 2, 2, src.right - 4, src.bottom - 2, paint);
                paint.setColor(Color.MAGENTA);
                canvas.drawText("BUY", src.right * 2 / 3 + paint.getTextSize(), 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                paint.setColor(Color.WHITE);
            }
        }

        if (on_blind && id == 1) {
            paint.setTextSize(min(heght / 9, src.right / 12));
            paint.setColor(Color.WHITE);

            /**Bloc about a first type - tank */
            canvas.drawText(def_type[0], width - src.right + paint.getTextSize() / 2, paint.getTextSize(), paint);
            canvas.drawText(level + tower.getLev(0), width - src.right + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
            canvas.drawRect(width - src.right + 4, 3 * paint.getTextSize() - 2, width - src.right + src.right / 3 - 2, src.bottom - 2, paint);

            paint.setColor(Color.BLACK);
            canvas.drawText("Up", width - src.right + src.right / 9, (3 * paint.getTextSize() + src.bottom) / 2, paint);
            paint.setColor(Color.WHITE);

            /**Bloc about a second type - sniper*/
            if (tower.getValSpawn() > 1) {
                canvas.drawText(def_type[1], width - src.right + src.right / 3 + paint.getTextSize() / 2, paint.getTextSize(), paint);
                canvas.drawText(level + tower.getLev(1), width - src.right + src.right / 3 + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                canvas.drawRect(width - src.right + src.right / 3 + 2, 3 * paint.getTextSize() - 2, width - src.right + src.right * 2 / 3 - 2, src.bottom - 2, paint);

                paint.setColor(Color.BLACK);
                canvas.drawText("Up", width - src.right + src.right / 3 + paint.getTextSize() * 5 / 4, (3 * paint.getTextSize() + src.bottom) / 2, paint);
                paint.setColor(Color.WHITE);
            } else {
                paint.setColor(Color.GRAY);
                canvas.drawRect(width - src.right + src.right / 3 + 2, 2, width - src.right + src.right * 2 / 3 - 2, src.bottom - 2, paint);
                paint.setColor(Color.MAGENTA);
                canvas.drawText("BUY", width - src.right + src.right / 3 + paint.getTextSize(), 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                paint.setColor(Color.WHITE);
            }
            /**Bloc about a second type - engineer*/
            if (tower.getValSpawn() > 2) {
                canvas.drawText(def_type[2], width - src.right + src.right * 2 / 3, paint.getTextSize(), paint);
                canvas.drawText(level + tower.getLev(0), width - src.right + src.right * 2 / 3 + paint.getTextSize() / 2, 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                canvas.drawRect(width - src.right + src.right * 2 / 3 + 2, 3 * paint.getTextSize() - 2, width - src.right + src.right - 4, src.bottom - 2, paint);

                paint.setColor(Color.BLACK);
                canvas.drawText("Up", width - src.right + src.right * 7 / 9, (3 * paint.getTextSize() + src.bottom) / 2, paint);
                paint.setColor(Color.WHITE);
            } else {
                paint.setColor(Color.GRAY);
                canvas.drawRect(width - src.right + src.right * 2 / 3 + 2, 2, width - src.right + src.right - 4, src.bottom - 2, paint);
                paint.setColor(Color.MAGENTA);
                canvas.drawText("BUY", width - src.right + src.right * 2 / 3 + paint.getTextSize(), 2 * paint.getTextSize() + paint.getTextSize() / 2, paint);
                paint.setColor(Color.WHITE);
            }
        }

        tower.onDraw(canvas);
    }

    private boolean in_rect(int x, int y, Rect r) {
        return (r.left < x && x < r.right && r.top < y && y < r.bottom);
    }

    public void add_money(long i) {
        money += (int) i;
    }

    public void onTuch(int x, int y) {
        if (id == 0) {
            /**Block about blond */
            if (on_blind && dst.left < x && x < dst.right && y < dst.bottom) {
                src = new Rect(0, 0, heght * 2 / 3, heght / 3);
                on_blind = !on_blind;
            } else {
                if (!on_blind && x < dst.right && y < dst.bottom) {
                    src = new Rect(0, 0, 0, 0);
                    on_blind = !on_blind;
                }
            }

            /**Block about upgrade */
            if (in_rect(x, y, new Rect(4, (int) (3 * paint.getTextSize() - 2), src.right / 3 - 2, src.bottom - 2))) {

                if (money - def_war_cost[tower.getLev(0) % def_war_cost.length] > 0) {
                    money -= def_war_cost[tower.getLev(0) % def_war_cost.length];
                    tower.upgrade(0);
                }
            }


        } else {
            /**Block about blond */
            if (on_blind && width - dst.right < x && x < width - dst.left && y < dst.bottom) {
                src = new Rect(0, 0, heght * 2 / 3, heght / 3);
                on_blind = !on_blind;
            } else {
                if (!on_blind && width - dst.right < x && x < width - dst.left && y < dst.bottom) {
                    src = new Rect(0, 0, 0, 0);
                    on_blind = !on_blind;
                }
            }
            /**Block about upgrade */
            if (in_rect(x, y, new Rect(width - src.right + 4, (int) (3 * paint.getTextSize() - 2), width - src.right + src.right / 3 - 2, src.bottom - 2))) {
                if (money - def_war_cost[tower.getLev(0) % def_war_cost.length] > 0) {
                    money -= def_war_cost[tower.getLev(0) % def_war_cost.length];
                    tower.upgrade(0);
                }
            }

        }
    }
}
