package ru.wolfpro.Converter38Parrots;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.Toast;

public class MyActivity extends Activity {

    private EditText textInfo;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        textInfo = (EditText) findViewById(R.id.editText);
    }

    public void buttonConvert_Click(View v) {
        switch (v.getId()) {
            case R.id.button:
                RadioButton MetetButton = (RadioButton) findViewById(R.id.radioMeter);
                RadioButton ParrotButton = (RadioButton) findViewById(R.id.radioParrot);
                if (textInfo.getText().length() == 0) {
                    Toast.makeText(this, "Введите длинну", Toast.LENGTH_SHORT).show();
                    return;
                }

                float inputValue = Float.parseFloat(textInfo.getText().toString());
                if (MetetButton.isChecked()) {
                    textInfo.setText(String.valueOf(convertMeterToParrot(inputValue)));
                } else {
                    textInfo.setText(String.valueOf(convertParrotToMeter(inputValue)));
                }

                if (ParrotButton.isChecked()) {
                    ParrotButton.setChecked(false);
                    MetetButton.setChecked(true);
                } else {
                    ParrotButton.setChecked(true);
                    MetetButton.setChecked(false);
                }
                break;
        }
    }

    private float convertParrotToMeter(float parrot) {
        return (float) (parrot / 7.6);
    }

    private float convertMeterToParrot(float meter) {
        return (float) (meter * 7.6);
    }
}

