package com.gseii2.smartmedical;

import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import antonkozyriatskyi.circularprogressindicator.CircularProgressIndicator;

public class BpmActivity extends AppCompatActivity {

    CircularProgressIndicator progressProgress;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.bpm_activity);

        final CircularProgressIndicator circularProgress = findViewById(R.id.circular_progress);
        circularProgress.setMaxProgress(200);
        circularProgress.setCurrentProgress(80);
        circularProgress.setProgressTextAdapter(new CircularProgressIndicator.ProgressTextAdapter() {
            @NonNull
            @Override
            public String formatText(double currentProgress) {
                return String.valueOf((int) currentProgress) + " Bpm";
            }
        });
    }
}
