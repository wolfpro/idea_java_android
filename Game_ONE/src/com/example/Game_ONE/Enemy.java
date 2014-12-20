package com.example.Game_ONE;

import android.graphics.Bitmap;
import android.graphics.Canvas;

import java.util.Random;

/**
 * Created by wolfpro on 10/28/14.
 */
public class Enemy {
    public int x, y;
    public int speed;

    public int width, height;
    int d_width;
   int d_height;


    public GameView gameView;
    public Bitmap bmp;


    Enemy(GameView gameView, Bitmap bmp, int d_width, int d_height) {
        this.gameView = gameView;
        this.bmp = bmp;

        this.d_height = d_height;
        this.d_width = d_width;

        Random rnd = new Random();

        this.x = d_height;
        this.y = rnd.nextInt((d_height)-2*height)+height;
        this.speed = rnd.nextInt(3) + 1;

        this.width = 9;
        this.height = 8;
    }

    public void update() {
        x -= speed;
    }

    public void onDraw(Canvas c) {
        update();
        c.drawBitmap(bmp, x, y, null);
    }
}
