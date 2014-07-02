package ru.wolfpro.Popupmenu;

import android.app.Activity;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.*;

public class MyStartActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        Button button = (Button) findViewById(R.id.button);
        TextView text = (TextView) findViewById(R.id.text);
        ImageView image = (ImageView) findViewById(R.id.image);

        button.setOnClickListener(viewClickListener);
        text.setOnClickListener(viewClickListener);
        image.setOnClickListener(viewClickListener);
    }

    OnClickListener viewClickListener = new OnClickListener() {
        @Override
        public void onClick(View v) {
            showPopupMenu(v);
        }
    };


    private void showPopupMenu(View v) {
        PopupMenu popupMenu = new PopupMenu(MyStartActivity.this, v);
        popupMenu.inflate(R.menu.popupmenu);

        popupMenu.setOnMenuItemClickListener(new PopupMenu.OnMenuItemClickListener() {
            @Override
            public boolean onMenuItemClick(MenuItem item) {
                switch (item.getItemId()) {
                    case R.id.submenu:
                        Toast.makeText(MyStartActivity.this,"Вы выбрали SubMenu", Toast.LENGTH_SHORT).show();
                        return true;
                    case R.id.menu1:
                        Toast.makeText(MyStartActivity.this,
                                "Вы выбрали PopupMenu 1",
                                Toast.LENGTH_SHORT).show();
                        return true;
                    case R.id.menu2:
                        Toast.makeText(MyStartActivity.this,
                                "Вы выбрали PopupMenu 2",
                                Toast.LENGTH_SHORT).show();
                        return true;
                    case R.id.menu3:
                        Toast.makeText(MyStartActivity.this,
                                "Вы выбрали PopupMenu 3",
                                Toast.LENGTH_SHORT).show();
                        return true;
                    default:
                        return false;
                }
            }
        });

       /* popupMenu.setOnDismissListener(new PopupMenu.OnDismissListener() {

            @Override
            public void onDismiss(PopupMenu menu) {
                // TODO Auto-generated method stub
                //Toast.makeText(MyStartActivity.this, "", Toast.LENGTH_SHORT).show();
            }
        });*/
        popupMenu.show();
    }
}

