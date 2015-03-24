package com.example.WizardBatle_Game.graphic_core;

import android.content.Context;
import android.graphics.*;
import android.view.MotionEvent;
import android.view.SurfaceHolder;
import android.view.SurfaceView;
import com.example.WizardBatle_Game.R;
import com.example.WizardBatle_Game.game_core.Monster;
import com.example.WizardBatle_Game.game_core.Player_res.Player;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Date;
import java.util.Random;

/**
 * Created by wolfpro on 2/8/15.
 */
public class Comparator extends SurfaceView {
    private Paint p;
    private static String[] def_type = {"warrior", "engineer", "medic"};
    private ArrayList<Monster> monsters;
    private ArrayList<Monster> buff;
    private Player lefPlayer, rigPlayer;
    private long last_d, now_d, FPS, upd;
    private Date d;

    private double K;

    private boolean RUN;
    private GameThread mThread;
    Canvas canvas;
    Bitmap b;


    public class GameThread extends Thread {
        private Comparator view;

        public GameThread(Comparator view) {
            this.view = view;
            FPS = 35;
            upd = 1000 / FPS;
            d = new Date();
        }

        public void setRun(boolean run) {
            RUN = run;
        }

        void add_money(int id, long def) {
            if (id == 0) {
                lefPlayer.add_money(def);
            } else {
                rigPlayer.add_money(def);
            }
        }

        void monster_fight(Monster a, Monster b) {
            int h0s = a.getPosition(), h0e = a.getPosition() + a.getHeight();
            int h1s = b.getPosition(), h1e = b.getPosition() + b.getHeight();

            if (((h0s <= h1s) && (h1s <= h0e)) || ((h0s <= h1e) && (h1e <= h0e))) {
                long def = a.get_def(now_d);
                add_money(a.getId(), def);
                b.attack(def);
                a.setMove(false);
                System.out.println(def);
            }
            if (((h1s <= h0s) && (h0s <= h1e)) || ((h1s <= h0e) && (h0e <= h1e))) {
                long def = b.get_def(now_d);
                add_money(b.getId(), def);
                a.attack(def);
                b.setMove(false);
                System.out.println(def);
            }
        }


        void kill_monster(int id, int def) {
            for (Monster i : monsters) {
                if (i.getId() == id){
                    i.attack((long) def);
                    add_money(1-id, def);
                }
            }
        }

        @Override
        public void run() {

            last_d = d.getTime();

            while (RUN) {

                if (K == 0) {
                    K = (view.getHeight()) / 9;
                    rigPlayer.setMaxWidth(getWidth());
                    System.out.println(getWidth());
                }

                now_d = d.getTime();
                try {
                    view.getHolder().unlockCanvasAndPost(view.getHolder().lockCanvas(new Rect(0, 0, 0, 0)));

                    if (now_d - last_d < upd)
                        sleep(upd - now_d + last_d);
                    d = new Date();
                    now_d = d.getTime();

                    canvas = view.getHolder().lockCanvas();

                    synchronized (view.getHolder()) {
                        lefPlayer.upgrade(now_d);
                        rigPlayer.upgrade(now_d);

                        buff = lefPlayer.get_buff();
                        for (Monster i : buff) {
                            i.setKsize(K);
                            monsters.add(i);
                        }
                        buff.clear();

                        buff = rigPlayer.get_buff();
                        for (Monster i : buff) {
                            i.setKsize(K);
                            monsters.add(i);
                        }
                        buff.clear();

                        //check collision;
                        Collections.sort(monsters, new java.util.Comparator<Monster>() {
                                    @Override
                                    public int compare(Monster a, Monster b) {
                                        if (a.getPosition() > b.getPosition())
                                            return 1;
                                        if (a.getPosition() == b.getPosition() + 10 || a.getPosition() == b.getPosition() - 10)
                                            return 0;
                                        return -1;
                                    }
                                }
                        );


                        //check a foe;
                        for (Monster i : monsters)
                            i.setMove(true);

                        for (int i = 0; i < monsters.size(); ++i) {
                            Monster a = monsters.get(i), b = monsters.get(0);
                            if (i == monsters.size() - 1) {
                                if (a.is_live() && b.is_live() && a.getPosition() + a.getHeight() >= b.getPosition()) {
                                    if (new Random().nextInt(2) == 1) {
                                        monster_fight(a, b);
                                    } else
                                        monster_fight(b, a);
                                }
                            } else
                                for (int j = i + 1; a.is_live() && j < monsters.size() && monsters.get(j).is_live() && a.getPosition() + a.getWidth() >= monsters.get(j).getPosition(); ++j)
                                    if (monsters.get(j).getId() != monsters.get(i).getId()) {
                                        b = monsters.get(j);

                                        if (new Random().nextInt(2) == 1) {
                                            monster_fight(a, b);
                                        } else
                                            monster_fight(b, a);
                                    }
                        }

                        if (lefPlayer.get_magic_one()) {
                            kill_monster(1, lefPlayer.get_magic_one_def());
                        }

                        if (rigPlayer.get_magic_one()) {
                            kill_monster(0, rigPlayer.get_magic_one_def());
                        }

                        //update monsters position;
                        for (int i = 0; i < monsters.size(); ++i) {
                            if (!monsters.get(i).is_live())
                                monsters.remove(i);

                        }
                        for (Monster i : monsters) {
                            // i.setMove(true);
                            i.update();
                        }

                        onDraw(canvas);

                        last_d = now_d;
                    }
                } catch (Exception e) {

                } finally {
                    if (canvas != null)
                        view.getHolder().unlockCanvasAndPost(canvas);
                    //view.getHolder().unlockCanvasAndPost(view.getHolder().lockCanvas(new Rect(0, 0, 0, 0)));
                }
            }
        }
    }

    public boolean onTouchEvent(MotionEvent e) {
        if (e.getAction() == MotionEvent.ACTION_DOWN) {
            lefPlayer.onTuch((int) e.getX(), (int) e.getY());
            rigPlayer.onTuch((int) e.getX(), (int) e.getY());
        }
        return true;
    }


    public Comparator(Context context) {


        super(context);

        p = new Paint();
        p.setColor(Color.BLACK);

        RUN = false;

        mThread = new GameThread(this);
        monsters = new ArrayList<Monster>();

        buff = new ArrayList<Monster>();

        Bitmap[] tAr = new Bitmap[1];
        Bitmap[] tAl = new Bitmap[1];
        Bitmap tower_l, tower_r;
        tAl[0] = (BitmapFactory.decodeResource(getResources(), R.drawable.knight));
        tower_l = BitmapFactory.decodeResource(getResources(), R.drawable.tower);
        lefPlayer = new Player(0, tAl, tower_l, getWidth(), new Date().getTime(), (int) FPS);

        tAr[0] = (BitmapFactory.decodeResource(getResources(), R.drawable.knight2));
        tower_r = BitmapFactory.decodeResource(getResources(), R.drawable.tower);
        rigPlayer = new Player(1, tAr, tower_r, getWidth(), new Date().getTime(), (int) FPS);


        //lefPlayer.upgrade(new Date().getTime());

        //draw

        getHolder().addCallback(new SurfaceHolder.Callback() {
            @Override
            public void surfaceCreated(SurfaceHolder holder) {
                mThread.setRun(true);
                mThread.start();
            }

            @Override
            public void surfaceChanged(SurfaceHolder holder, int format, int width, int height) {

            }

            @Override
            public void surfaceDestroyed(SurfaceHolder holder) {
                boolean retry = true;
                mThread.setRun(false);
                while (retry) {
                    try {
                        mThread.join();
                        retry = false;
                    } catch (InterruptedException e) {

                    }
                }
            }
        });

        System.out.println("hello");
    }

    @Override
    protected void onDraw(Canvas canvas) {
        canvas.drawColor(Color.CYAN);

        canvas.drawLine(0, canvas.getHeight() * 2 / 3, canvas.getWidth(), canvas.getHeight() * 2 / 3, p);

        for (int i = 0; i < monsters.size(); ++i) {
            if ((monsters.get(i).getId() == 0 && monsters.get(i).getPosition() <= canvas.getWidth()) || (monsters.get(i).getId() == 1 && monsters.get(i).getPosition() >= -monsters.get(i).getHeight())) {
                monsters.get(i).onDraw(canvas);
            }
            if ((monsters.get(i).getId() == 0 && monsters.get(i).getPosition() > canvas.getWidth()) || (monsters.get(i).getId() == 1 && monsters.get(i).getPosition() < -monsters.get(i).getHeight())) {
                monsters.remove(i);
            }
        }

        lefPlayer.onDraw(canvas);
        rigPlayer.onDraw(canvas);
    }
}
