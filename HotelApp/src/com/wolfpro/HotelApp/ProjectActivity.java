package com.wolfpro.HotelApp;

import android.app.Activity;
import android.os.Bundle;

/**
 * Created by wolfpro on 12/20/14.
 */

public class ProjectActivity extends Activity {
    @Override
    protected void onPostCreate(Bundle sis){
        super.onPostCreate(sis);

        setContentView(R.layout.main_project);
    }

}
