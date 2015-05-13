package com.wolfpro.HotelApp;

import android.app.ListActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Toast;

/**
 * Created by wolfpro on 5/13/15.
 */
public class MakePerson extends ListActivity {
    private ArrayAdapter<String> adapter;
    private String name;

    @Override
    protected void onPostCreate(Bundle sis) {
        super.onPostCreate(sis);

        name = getIntent().getExtras().getString("position");

        String[] personnel = {""};
        if (name.equals("Admins"))
           personnel = getResources().getStringArray(R.array.Admins);
        if (name.equals("Bookkeepers"))
            personnel = getResources().getStringArray(R.array.Bookkeepers);
        if (name.equals("Cleaners"))
            personnel = getResources().getStringArray(R.array.Cleaners);
        if (name.equals("Guards"))
            personnel = getResources().getStringArray(R.array.Guards);
        if (name.equals("Guards"))
            personnel = getResources().getStringArray(R.array.Managers);

        adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, personnel);
        setListAdapter(adapter);
    }

    protected void onListItemClick(android.widget.ListView l, View v, int position, long id) {
        Toast.makeText(getApplicationContext(), "You chose " + l.getItemAtPosition(position).toString(), Toast.LENGTH_LONG).show();
    }
}