package com.codapp.CalcApp2_3_3;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MyActivity extends Activity {

    /**
     * Called when the activity is first created.
     */

    Core core;
    EditText et;
    String stAns;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        core = new Core();
        core.setWidth(13);

        et = (EditText) findViewById(R.id.eT);
    }

    private void ds() {
        String s = et.getText().toString();
        if (et.getSelectionStart() > 0) {
            int end = et.getSelectionEnd();
            StringBuilder sb = new StringBuilder();
            for (int i = 0; i < s.length(); i++) {
                if (i != end - 1)
                    sb.append(s.charAt(i));
            }

            et.setText(sb.toString());
            et.setSelection(end - 1);
        }
    }

    private boolean isem() {
        if (et.length() == 0)
            return false;
        else
            return true;
    }

    private int s() {
        if (et.length() == 0)
            return -1;
        char c = et.getText().charAt(et.length() - 1);
        if (c <= '9' && c >= '0' || c == ')')
            return -1;
        return 0;
    }

    private boolean doblSign() {
        if (s() == -1)
            return true;
        return false;
    }

    public void onClick(View v) {


        switch (v.getId()) {
            case R.id.but0:
                inCurs("0");
                break;
            case R.id.but1:
                inCurs("1");
                break;
            case R.id.but2:
                inCurs("2");
                break;
            case R.id.but3:
                inCurs("3");
                break;
            case R.id.but4:
                inCurs("4");
                break;
            case R.id.but5:
                inCurs("5");
                break;
            case R.id.but6:
                inCurs("6");
                break;
            case R.id.but7:
                inCurs("7");
                break;
            case R.id.but8:
                inCurs("8");
                break;
            case R.id.but9:
                inCurs("9");
                break;
            case R.id.butMin:
                if (doblSign())
                    inCurs("-");
                break;
            case R.id.butPls:
                if (isem() && doblSign())
                    inCurs("+");
                break;
            case R.id.butMultipl:
                if (isem() && doblSign())
                    inCurs("*");
                break;
            case R.id.butDecimal:
                if (isem() && doblSign())
                    inCurs("/");
                break;
            case R.id.butDot:
                if (isem() && doblSign())
                    inCurs(".");
                break;
            case R.id.butOn:
                inCurs("(");
                break;
            case R.id.butOff:
                inCurs(")");
                break;
            case R.id.butMC:
                et.setText("");
                break;
            case R.id.butDel:
                ds();
                break;
            case R.id.butEqu:
                // core.setWidth(et.getMaxEms());
                if (isem()) {
                    et.setText(core.getAns(et.getText().toString()));
                    et.setSelection(et.length());
                }
                break;
            default:
                break;
        }

    }

    public void onMenuClick(View v) {
        Intent intent = new Intent(MyActivity.this, MyListActivity.class);
        // startActivity(intent);
        startActivityForResult(intent, 0);
        //ans = getIntent().getExtras().getString(getResources().getString(R.string.ind));
        // et.append(ans);
    }

    void inCursF(String s) {
        int pos = et.getSelectionEnd();
        int len = et.length();

        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < len; i++) {
            if (i == pos)
                sb.append(s);
            sb.append(et.getText().charAt(i));
        }
        et.setText(sb.toString());

        if (len == pos)
            et.append(s);

        if(!s.equals("^")){
            et.setSelection(pos+s.length()-1);
        }

        /*if (et.length() >= 2 && et.getText().charAt(et.length() - 1) == ')' && et.getText().charAt(et.length() - 2) == '(') {
            if (pos > 0)
                et.setSelection(pos + s.length() - 2);
            else
                et.setSelection(pos + s.length() - 1);
        } else
            et.setSelection(pos + s.length());*/

    }
    void inCurs(String s) {
        int pos = et.getSelectionEnd();
        int len = et.length();

        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < len; i++) {
            if (i == pos)
                sb.append(s);
            sb.append(et.getText().charAt(i));
        }
        et.setText(sb.toString());
        if (len == pos)
            et.append(s);
        et.setSelection(pos+s.length());
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        if (requestCode == 0 && resultCode == RESULT_OK) {
            stAns = data.getStringExtra(getResources().getString(R.string.ind) + "Ans");
            inCursF(stAns);
        }
    }
}