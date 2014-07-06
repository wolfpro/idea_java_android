package com.codapp.CalcApp2_3_3;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MyActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    Core core;
    EditText et;


    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        core = new Core();
        core.setWidth(13);

        et = (EditText) findViewById(R.id.eT);
    }

    private String ds(String s) {
        if (s.length() > 0) {
            StringBuilder sb = new StringBuilder();
            for (int i = 0; i < s.length() - 1; i++)
                sb.append(s.charAt(i));
            return sb.toString();
        } else
            return s;
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
        char c = et.getText().charAt(et.length()-1);
        if (c <= '9' && c >= '0')
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
                et.append("0");
                break;
            case R.id.but1:
                et.append("1");
                break;
            case R.id.but2:
                et.append("2");
                break;
            case R.id.but3:
                et.append("3");
                break;
            case R.id.but4:
                et.append("4");
                break;
            case R.id.but5:
                et.append("5");
                break;
            case R.id.but6:
                et.append("6");
                break;
            case R.id.but7:
                et.append("7");
                break;
            case R.id.but8:
                et.append("8");
                break;
            case R.id.but9:
                et.append("9");
                break;
            case R.id.butMin:
                if (doblSign())
                    et.append("-");
                break;
            case R.id.butPls:
                if (isem() && doblSign())
                    et.append("+");
                break;
            case R.id.butMultipl:
                if (isem() && doblSign())
                    et.append("*");
                break;
            case R.id.butDecimal:
                if (isem() && doblSign())
                    et.append("/");
                break;
            case R.id.butDot:
                if (isem() && doblSign())
                    et.append(".");
                break;
            case R.id.butOn:
                et.append("(");
                break;
            case R.id.butOff:
                et.append(")");
                break;
            case R.id.butMC:
                et.setText("");
                break;
            case R.id.butDel:
                et.setText(ds(et.getText().toString()));
                et.setSelection(et.length());
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

}
