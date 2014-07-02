package ru.wolfpro.MotoApp;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class MyActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    int crows = 0, cat = 0;
    TextView tvHello;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
    }

    public void butHello_Click(View v) {
        tvHello = (TextView) findViewById(R.id.textHello);
        tvHello.setText("Hello Kitty!");
    }

    public void Crows_Click(View v) {
        tvHello = (TextView) findViewById(R.id.textCrows);
        tvHello.setText("Ворон: " + ++crows);
    }

    public void Cat_Click(View v) {
        tvHello = (TextView) findViewById(R.id.textCat);
        tvHello.setText("Кисок: "+ ++cat);
    }


}
