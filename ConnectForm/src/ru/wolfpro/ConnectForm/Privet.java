package ru.wolfpro.ConnectForm;

import android.app.Activity;
import android.os.Bundle;
import android.widget.TextView;

/**
 * Created by wolfpro on 6/22/14.
 */
public class Privet extends Activity {
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.privet);

        TextView txtInfo = (TextView)findViewById(R.id.textView);

        String user ="ЖЫвотное";
        String gift = "дырку от бублика";
        String author = "Жираф";
        String ind = "ru.wolfpro.ConnectForm.";

        user = getIntent().getExtras().getString(ind+"USERNAME");
        gift = getIntent().getExtras().getString(ind+"GIFT");
        author = getIntent().getExtras().getString(ind+"AUTHOR");

        txtInfo.setText(user+ ", вам передали: "+gift+"\nauthor: "+author);
    }
}