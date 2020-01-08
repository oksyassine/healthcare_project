package com.gseii2.smartmedical;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

public class ProfileActivity extends AppCompatActivity {
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.profile_layout);
    }

    public void bpm(View view) {
        startActivity(new Intent(ProfileActivity.this, BpmActivity.class));
    }

    public void temp(View view){
        startActivity(new Intent(ProfileActivity.this, TempActivity.class));
    }
}
