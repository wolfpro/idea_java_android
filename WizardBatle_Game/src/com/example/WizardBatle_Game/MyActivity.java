package com.example.WizardBatle_Game;

import android.app.Activity;
import android.os.Bundle;
import com.example.WizardBatle_Game.graphic_core.Comparator;


public class MyActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
      //  setContentView(R.layout.main);
        setContentView(new Comparator(this));
    }
}
