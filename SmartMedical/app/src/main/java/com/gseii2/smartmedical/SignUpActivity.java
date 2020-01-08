package com.gseii2.smartmedical;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

public class SignUpActivity extends AppCompatActivity {

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.sign_up_screen);
    }

    public void signup(View view) {
        startActivity(new Intent(SignUpActivity.this, UserInfoActivity.class));
    }

    public void toLogin(View view) {
        startActivity(new Intent(SignUpActivity.this, LoginActivity.class));
    }
}
