package com.example.Games_One_Jamp;

import android.app.Activity;
import android.os.Bundle;

public class MyActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    int field[][];

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

       field= new int[3][4];
        for(int i=0; i<4; i++)
            field[2][i]=1;
    }
}
