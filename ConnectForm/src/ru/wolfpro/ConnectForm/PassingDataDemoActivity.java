package ru.wolfpro.ConnectForm;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class PassingDataDemoActivity extends Activity {
    /**
     * Called when the activity is first created.
     */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
    }

    public void onClick(View v) {
        EditText edUserName = (EditText) findViewById(R.id.editAddr);
        EditText edDescription = (EditText) findViewById(R.id.editAbout);
        EditText edAuthor = (EditText) findViewById(R.id.editAuthor);

        String ind = "ru.wolfpro.ConnectForm.";

        Intent intent = new Intent(PassingDataDemoActivity.this, Privet.class);
        intent.putExtra(ind+"USERNAME", edUserName.getText().toString());
        intent.putExtra(ind+"GIFT", edDescription.getText().toString());
        intent.putExtra(ind+"AUTHOR", edAuthor.getText().toString());

        startActivity(intent);
    }
}
