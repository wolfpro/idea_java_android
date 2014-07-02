package ru.wolfpro.Sherlock;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;

/**
 * Created by wolfpro on 6/23/14.
 */
public class Chose extends Activity {
    static String i = "ru.wolfpro.Sherlock.";
    public final static String THIEF = i + "THIEF";


    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.chose);
    }

    public void onRadioClick(View v) {
        Intent answerIntent = new Intent();

        switch (v.getId()) {
            case R.id.radioDog:
                answerIntent.putExtra(THIEF, "Сраный песик");
                break;
            case R.id.radioCrow:
                answerIntent.putExtra(THIEF, "Ворона");
                break;
            case R.id.radioCat:
                answerIntent.putExtra(THIEF, "Лошадь Прежевальского");
                break;
            default:
                break;
        }

        setResult(RESULT_OK, answerIntent);
        finish();
    }
}