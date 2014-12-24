package com.wolfpro.HotelApp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;

/**
 * Created by wolfpro on 12/20/14.
 */

public class ProjectActivity extends Activity {
    @Override
    protected void onPostCreate(Bundle sis){
        super.onPostCreate(sis);
        setContentView(R.layout.main_project);
    }
    public  void onClickPersonnel(View view){
        Intent intent = new Intent(ProjectActivity.this, PersonnelActivity.class);
        startActivity(intent);
    }

}
