package com.wolfpro.HotelApp;


import android.app.ListActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import java.lang.reflect.Array;
import java.util.Arrays;

/**
 * Created by wolfpro on 12/21/14.
 */
public class PersonnelActivity extends ListActivity {
    private ArrayAdapter<String> adapter;

    @Override
    protected void onPostCreate(Bundle sis) {
        super.onPostCreate(sis);
        String[] personnel = getResources().getStringArray(R.array.kind_personnel);

        adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, personnel);
        setListAdapter(adapter);
    }

    protected void onListItemClick(android.widget.ListView l, View v, int position, long id){
        Toast.makeText(getApplicationContext(), "You chose "+l.getItemAtPosition(position).toString(), Toast.LENGTH_LONG).show();
    }

}