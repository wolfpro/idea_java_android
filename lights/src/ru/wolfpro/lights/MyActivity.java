package ru.wolfpro.lights;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.content.Intent;

public class MyActivity extends Activity {
    /**
     * Called when the activity is first created.
     */

    TextView tvInfo;
    RelativeLayout rl;
    Button about;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        rl = (RelativeLayout) findViewById(R.id.rl);
        tvInfo = (TextView) findViewById(R.id.textView);
        about = (Button) findViewById(R.id.butAbout);
    }

    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.butRed:
                rl.setBackgroundResource(R.color.red);
                tvInfo.setText(R.string.red);
                break;
            case R.id.butYellow:
                rl.setBackgroundResource(R.color.yellow);
                tvInfo.setText(R.string.Yellow);
                break;
            case R.id.butGreen:
                rl.setBackgroundColor(getResources().getColor(R.color.green));
                tvInfo.setText(R.string.green);
                break;
        }
        about.setBackgroundColor(rl.getDrawingCacheBackgroundColor());
    }

    public void onClick_About(View v){
        Intent intent = new Intent(MyActivity.this, AboutActivity.class);
        startActivity(intent);
    }
}
