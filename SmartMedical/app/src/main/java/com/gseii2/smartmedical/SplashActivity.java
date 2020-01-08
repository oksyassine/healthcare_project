/**
 * Created by GSEII2_SMART_MEDICAL.
 * This class adds a splash screen at the launching of the application.
 * We choose a simple method of post a runnable (which is the temperature activity) with a delay while
 * showing the splash screen.
 */
package com.gseii2.smartmedical;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

public class SplashActivity extends AppCompatActivity {

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.splash_screen);

        int secondsDelayed = 1; /* number of seconds that the splash screen will be shown */

        new Handler().postDelayed(new Runnable() { /* schedule a runnable to run at a certain time */

            public void run() {
                startActivity(new Intent(SplashActivity.this, TempActivity.class)); /* start the Temp Activity */
                finish(); /* destroy the current activity */
            }
        }, secondsDelayed * 1000); /* secondsDelayed * 1000 -> seconds */
    }
}
