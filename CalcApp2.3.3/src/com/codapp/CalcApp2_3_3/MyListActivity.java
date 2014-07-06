package com.codapp.CalcApp2_3_3;

import android.app.ListActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;


/**
 * Created by wolfpro on 7/6/14.
 */
public class MyListActivity extends ListActivity {

    private ArrayAdapter<String> adapter;
    String val;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        //et = (EditText) findViewById(R.id.eT);

        final String[] catnames = new String[]{
                "^",
                getResources().getString(R.string.FUN_sqr),
                getResources().getString(R.string.FUN_sin) + " " + getResources().getString(R.string.inDeg),
                getResources().getString(R.string.FUN_asin) + " " + getResources().getString(R.string.inDeg),
                getResources().getString(R.string.FUN_cos) + " " + getResources().getString(R.string.inDeg),
                getResources().getString(R.string.FUN_acos) + " " + getResources().getString(R.string.inDeg),
                getResources().getString(R.string.FUN_tan) + " " + getResources().getString(R.string.inDeg),
                getResources().getString(R.string.FUN_atan) + " " + getResources().getString(R.string.inDeg),
        };
        val = "";
        adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, catnames);

        setListAdapter(adapter);
        getListView().setOnItemClickListener(itemClickListener);

    }

    AdapterView.OnItemClickListener itemClickListener = new AdapterView.OnItemClickListener() {
        @Override
        public void onItemClick(AdapterView<?> parent, View v, int position, long id) {
            val = parent.getItemAtPosition(position).toString();
            if (position == 2)
                val = "sin";

            if (position > 0)
                val += "()";

            Intent intent = new Intent();
            intent.putExtra(getResources().getString(R.string.ind) + "Ans", val);
            setResult(RESULT_OK, intent);
            finish();
        }
    };

}