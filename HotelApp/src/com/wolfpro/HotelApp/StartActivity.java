package com.wolfpro.HotelApp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class StartActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
    }

    public  void onClickProject(View view){
        Intent intent = new Intent(StartActivity.this, ProjectActivity.class);
        startActivity(intent);
    }
    public  void onClickSetting(View view){
        Intent intent = new Intent(StartActivity.this, SetActivity.class);
        startActivity(intent);
    }
    public  void onClickHelp(View view){
        Intent intent = new Intent(StartActivity.this, HelpActivity.class);
        startActivity(intent);
    }
}
