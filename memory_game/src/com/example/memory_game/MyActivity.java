package com.example.memory_game;

import android.app.Activity;
import android.graphics.Typeface;
import android.os.Bundle;
import android.view.View;
import android.widget.*;

public class MyActivity extends Activity {
    /**
     * Called when the activity is first created.
     */

    private GridView mGrid;
    private GridAdapter mAdapter;

    private TextView mStepScreen;
    private Chronometer mTimeScreen;
    private Integer StepCount;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        mTimeScreen = (Chronometer) findViewById(R.id.timeview);
        mStepScreen = (TextView) findViewById(R.id.stepview);

        Typeface type = Typeface.createFromAsset(getAssets(), "my-font.ttf");
        mTimeScreen.setTypeface(type);
        mStepScreen.setTypeface(type);

        StepCount = 0;
        mStepScreen.setText(StepCount.toString());

        mTimeScreen.start();

        mGrid = (GridView) findViewById(R.id.field);
        mGrid.setNumColumns(6);
        mGrid.setEnabled(true);

        mAdapter = new GridAdapter(this, 6, 6);
        mGrid.setAdapter(mAdapter);

        mGrid.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View v, int position, long id) {
                mAdapter.checkOpenCells();
                if (mAdapter.openCell(position)) {
                    StepCount++;
                    mStepScreen.setText(StepCount.toString());
                }

                if (mAdapter.checkGameOver()) {
                    mTimeScreen.stop();
                    String time = mTimeScreen.getText().toString();
                    String TextToast = "Game over! Steps: " + StepCount.toString() + " time: " + time;
                    Toast.makeText(getApplicationContext(), TextToast,
                            Toast.LENGTH_SHORT).show();
                }
            }
        });

    }
}
