package com.example.Game_ONE;

import android.graphics.Bitmap;
import android.graphics.Canvas;

/**
 * Created by wolfpro on 10/28/14.
 */
public class Bullet {
    private int con_Height = 27, con_Width = 40;
    private Bitmap bmp;
    public int x, y;
    private int mSpeed = 25;
    public double angle;
    public int width, height;
    public GameView gameView;

    Bullet(GameView gameView, Bitmap bmp, int pl_hight){
        this.gameView = gameView;
        this.bmp = bmp;

        this.x=0;
        this.y=gameView.getHeight()/2 -  pl_hight;
        this.width = con_Width;
        this.height = con_Height;

        angle = Math.atan((double)(y-gameView.shotY)/(x-gameView.shotX));
    }

    private void update(){
        x+=mSpeed*Math.cos(angle);
        y+=mSpeed*Math.sin(angle);
    }

    public void onDraw(Canvas canvas){
        update();

        canvas.drawBitmap(bmp, x, y, null);
    }
}
