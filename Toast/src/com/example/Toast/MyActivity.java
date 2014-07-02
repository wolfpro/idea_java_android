package com.example.Toast;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.Gravity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

public class MyActivity extends Activity {

    AlertDialog.Builder ad;
    Context context;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        context = MyActivity.this;
        String title = "Выбор есть всегда";
        String message = "Выбери пищу";
        String button1String = "Вкусная пища";
        String button2String = "Полезная пища";

        ad= new AlertDialog.Builder(context);
        ad.setTitle(title);
        ad.setMessage(message).setPositiveButton(button1String, new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                Toast.makeText(context, "Вы сделали правельный выбор!", Toast.LENGTH_LONG).show();
            }
        });
        ad.setNegativeButton(button2String, new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                Toast.makeText(context,"Вы ничего не выбрали...", Toast.LENGTH_LONG).show();
            }
        });

    }

    public void buttonShowToast_Click(View v) {
        /*Toast toast = Toast.makeText(getApplicationContext(), "Пора кормить кошку!", Toast.LENGTH_SHORT);
        toast.setGravity(Gravity.CENTER, 0, 0);
        toast.show();*/

        /*int duration = Toast.LENGTH_LONG;
        Toast toast2 = Toast.makeText(getApplicationContext(), "Корми кота!", duration);
        toast2.setGravity(Gravity.TOP, 0, 0);
        toast2.show();*/

       /* Toast toast3 = Toast.makeText(getApplicationContext(), "Девушка и мустанг", Toast.LENGTH_SHORT);
        toast3.setGravity(Gravity.CENTER, 0, 0);
        LinearLayout toastView = (LinearLayout) toast3.getView();
        ImageView imageGirl = new ImageView(getApplicationContext());
        imageGirl.setImageResource(R.drawable.photo);
        toastView.addView(imageGirl, 100, 100);
        toast3.show();*/

        LayoutInflater inflater = getLayoutInflater();
        View layout = inflater.inflate(R.layout.custom_layout, (ViewGroup) findViewById(R.id.toast_layout));

        ImageView imV = (ImageView) layout.findViewById(R.id.image);
        imV.setImageResource(R.drawable.photo);
        imV.setMaxHeight(100);
        imV.setMaxHeight(100);
        TextView tV = (TextView) layout.findViewById(R.id.text);
        tV.setText("Девушка как хочу.");


        Toast toast = new Toast(getApplicationContext());
        toast.setGravity(Gravity.CENTER_VERTICAL, 0,0);
        toast.setDuration(Toast.LENGTH_LONG);


        toast.setView(layout);
        toast.show();

    }

    public  void onClickDialog(View v){

        ad.show();
    }
}
