package com.example.WizardBatle_Game.graphic_core;

import android.content.Context;
import android.graphics.Canvas;
import android.graphics.Color;
import android.graphics.Paint;
import android.view.View;

/**
 * Created by wolfpro on 2/7/15.
 */
public class Draw extends View {
    private int HEIGHT, WIDHT;
    private Paint mPaint = new Paint();

    private int max(int a, int b) {
        if (a > b)
            return a;
        return b;
    }

    private int min(int a, int b) {
        if (a < b)
            return a;
        return b;
    }

    public Draw(Context context) {
        super(context);
    }

    @Override
    protected void onDraw(Canvas canvas) {
        super.onDraw(canvas);
        WIDHT = canvas.getWidth();
        HEIGHT = canvas.getHeight();

        //style backk
        mPaint.setStyle(Paint.Style.FILL);

        //draw
        mPaint.setColor(Color.WHITE);
        canvas.drawPaint(mPaint);

        mPaint.setColor(Color.BLACK);
        canvas.drawLine(0, 2 * HEIGHT / 3, WIDHT, 2 * HEIGHT / 3, mPaint);

    }
}
