package ru.wolfpro.Sherlock;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class StartActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    static final private int CHOOSE_THIEF = 0;
    TextView tvInfo;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        tvInfo = (TextView) findViewById(R.id.tvInfo);
    }

    public void onClick(View v) {
        Intent questionIntent = new Intent(StartActivity.this, Chose.class);
        startActivityForResult(questionIntent, CHOOSE_THIEF);
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        if (requestCode == CHOOSE_THIEF)
            if (resultCode == RESULT_OK) {
                tvInfo.setText(data.getStringExtra(Chose.THIEF));
            } else {
                tvInfo.setText("");
            }
    }
}



