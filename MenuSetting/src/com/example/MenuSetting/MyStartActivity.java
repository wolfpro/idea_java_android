package com.example.MenuSetting;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.TextView;

public class MyStartActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {

        TextView tvInfo=(TextView)findViewById(R.id.textV);

        int id = item.getItemId();
        switch (id){
            case R.id.action_cat1:
                tvInfo.setText("Вы выбрали кота!");
                return true;
            case R.id.action_cat2:
                tvInfo.setText("Вы выбрали кошку!");
                return true;
            case R.id.action_cat3:
                tvInfo.setText("Вы выбрали котёныша!");
                return true;
            case R.id.action_settings:
                tvInfo.setText("Вы выбрали еще какие то настройки!");
        }

        return super.onOptionsItemSelected(item);
    }
}
