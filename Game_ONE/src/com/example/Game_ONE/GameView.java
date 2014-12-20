package com.example.Game_ONE;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Canvas;
import android.graphics.Color;
import android.util.DisplayMetrics;
import android.view.MotionEvent;
import android.view.SurfaceHolder;
import android.view.SurfaceView;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;
import java.util.Random;

/**
 * Created by wolfpro on 10/28/14.
 */
public class GameView extends SurfaceView implements Runnable {
    private GameThread myThread;
    private List<Bullet> ball = new ArrayList<Bullet>();
    private Player player;
    private int pl_height;
    Bitmap players;

    private int disp_height, disp_width;

    private List<Enemy> enemy = new ArrayList<Enemy>();
    Bitmap enemys;
    private Thread thread;

    public int shotX;
    public int shotY;

    private boolean running = false;

    public class GameThread extends Thread {
        private GameView view;

        GameThread(GameView view) {
            this.view = view;
        }

        public void setRunning(boolean run) {
            running = run;
        }

        public void run() {
            while (running) {
                Canvas canvas = null;

                try {
                    canvas = view.getHolder().lockCanvas();
                    synchronized (view.getHolder()) {
                        onDraw(canvas);
                        testCollision();
                    }
                } catch (Exception e) {
                    System.out.println(e);
                } finally {
                    if (canvas != null) {
                        view.getHolder().unlockCanvasAndPost(canvas);
                    }
                }

            }
        }
    }

    public GameView(Context context) {
        super(context);

        DisplayMetrics displaymetrics = getResources().getDisplayMetrics();

        disp_height = displaymetrics.heightPixels;
        disp_width = displaymetrics.widthPixels;

        myThread = new GameThread(this);
        thread = new Thread(this);

        getHolder().addCallback(new SurfaceHolder.Callback() {
            @Override
            public void surfaceCreated(SurfaceHolder surfaceHolder) {
                myThread.setRunning(true);
                myThread.start();
                thread.start();
            }

            @Override
            public void surfaceChanged(SurfaceHolder surfaceHolder, int i, int i2, int i3) {

            }

            @Override
            public void surfaceDestroyed(SurfaceHolder surfaceHolder) {
                boolean retry = true;
                myThread.setRunning(false);
                thread.stop();
                while (retry) {
                    try {
                        myThread.join();
                        thread.join();
                        retry = false;
                    } catch (Exception e) {
                        System.out.println(e);
                    }
                }
            }
        });

        players = BitmapFactory.decodeResource(getResources(), R.drawable.player);
        player = new Player(this, players);
        pl_height = player.bmp.getHeight();

        enemys = BitmapFactory.decodeResource(getResources(), R.drawable.attacer);
        enemy.add(new Enemy(this, enemys, disp_width, disp_height));
    }

    protected void onDraw(Canvas canvas) {
        canvas.drawColor(Color.WHITE);

        int i = 0;
        for (Bullet b : ball) {
            if (b.x <= disp_height || b.y <= disp_width) {
                b.onDraw(canvas);
            } else {
                ball.remove(i);
            }
            ++i;
        }

        i = 0;
        for (Enemy en : enemy) {
            if (en.x <= disp_height || en.y <= disp_width) {
                en.onDraw(canvas);
            } else {
                enemy.remove(i);
            }
            ++i;
        }

        canvas.drawBitmap(players, 5, 120, null);
    }

    public Bullet createSprite(int resource) {
        Bitmap bmp = BitmapFactory.decodeResource(getResources(), resource);
        return new Bullet(this, bmp, pl_height);
    }

    public boolean onTouchEvent(MotionEvent e) {
        shotX = (int) e.getX();
        shotY = (int) e.getY();

        //if(e.getAction() == MotionEvent.ACTION_DOWN)
        {
            ball.add(createSprite(R.drawable.strike));
        }

        return true;
    }

    public void run() {

        while (true) {

            Random rnd = new Random();
            try {
                thread.sleep(rnd.nextInt(100));
                enemy.add(new Enemy(this, enemys, disp_width, disp_height));
            } catch (Exception e) {
                e.printStackTrace();
            }Z
        }
    }

    private void testCollision() {
        Iterator<Bullet> b = ball.iterator();
        while (b.hasNext()) {
            Bullet balls = b.next();
            Iterator<Enemy> i = enemy.iterator();
            while (i.hasNext()) {
                Enemy enemies = i.next();

                if ((Math.abs(balls.x - enemies.x) <= (balls.width + enemies.width) / 2f) && (Math.abs(balls.y - enemies.y) <= (balls.height + enemies.height) / 2f)) {
                    i.remove();
                    b.remove();
                }
            }
        }
    }
}
