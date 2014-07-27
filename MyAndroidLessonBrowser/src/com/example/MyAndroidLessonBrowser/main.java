package com.example.MyAndroidLessonBrowser;

import android.app.ListActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;


public class main extends ListActivity {

    private ArrayAdapter<String> adapter;
    private String[] mass;
    private String[] label;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        mass = getResources().getStringArray(R.array.lesson_label);
        label = getResources().getStringArray(R.array.lesson_help);
        adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, mass);
        setListAdapter(adapter);
    }

    protected void onListItemClick(ListView parent, View v, int position, long id) {
        Toast.makeText(
                getApplicationContext(),
                label[position],
                Toast.LENGTH_LONG).show();
        Intent intent = new Intent(main.this, browser.class);
        intent.putExtra(getResources().getString(R.string.appId), String.valueOf(position));

        startActivity(intent);
    }


}
