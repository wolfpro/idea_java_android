package com.example.Game_ONE;

import android.graphics.Bitmap;
import android.graphics.Canvas;

/**
 * Created by wolfpro on 10/28/14.
 */
public class Player {
    GameView gameView;

    Bitmap bmp;
    int x;
    int y;

    Player(GameView gameView, Bitmap bmp){
        this.gameView = gameView;
        this.bmp = bmp;

        this.x = 0;
        this.y = gameView.getHeight()/2;
    }

    public void onDraw(Canvas c){
        c.drawBitmap(bmp, x, y, null);
    }

}
