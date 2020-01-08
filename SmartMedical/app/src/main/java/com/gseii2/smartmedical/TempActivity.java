/**
 * Created by GSEII2_SMART_MEDICAL.
 * This class will retrieve the temperature periodically from the server and update the value
 * in a beautifully animated progress bar created by Anton Kozyriatskyi.
 * github link for it: https://github.com/antonKozyriatskyi/CircularProgressIndicator
 * This class uses Volley:
 * github link: https://github.com/google/volley
 */
package com.gseii2.smartmedical;

import android.os.Bundle;
import android.util.Log;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.VolleyLog;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.gseii2.smartmedical.Constants.HTTPConstants;
import com.gseii2.smartmedical.Constants.PatientConstants;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.UnsupportedEncodingException;
import java.util.ArrayList;

import antonkozyriatskyi.circularprogressindicator.CircularProgressIndicator;

public class TempActivity extends AppCompatActivity {

    private static final String TAG = "TempActivity"; /* Used for log stuff */

    Thread threadTemp = null; /* The thread that will be responsible for retrieving data */
    TempRunnablePost tempRunnablePost = null; /* Runnable of the thread */

    ArrayList<Double> temperatures; /* stores all temperature values */
    double min = 100, max=0, avg=0, sum=0; /* Average, Minimum and Maximum temperature */

    CircularProgressIndicator circularProgress; /* Anton Kozyriatskyi's circular progress bar */
    TextView avgTxt, minTxt, maxTxt; /* Average, Minimum and Maximum temperature fields */

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.temp_activity);

        PatientConstants.cni = "CD586972"; /* The id of the person's data to be retrieved from database */

        circularProgress = findViewById(R.id.circular_progress);
        circularProgress.setMaxProgress(100); /* Maximum progress is 100 so the interval will be 0-100 */

        avgTxt = findViewById(R.id.avgValue);
        minTxt = findViewById(R.id.minValue);
        maxTxt = findViewById(R.id.maxValue);

        temperatures = new ArrayList<>();
    }

    /* Create and start thread in the activity's onStart() method */
    @Override
    protected void onStart() {
        super.onStart();
        tempRunnablePost = new TempRunnablePost();
        threadTemp = new Thread(tempRunnablePost);
        threadTemp.start();
    }

    /* Destroy the thread in the activity's onDestroy() method */
    @Override
    protected void onDestroy() {
        super.onDestroy();
        tempRunnablePost.stop();
        threadTemp = null;
    }

    class TempRunnablePost implements Runnable {

        private volatile boolean exit = false; /* variable that will stop the loop inside the thread and let it be terminated */

        /* To stop the thread */
        public void stop() {
            exit = true;
        }

        @Override
        public void run() {
            /* Create a RequestQueue that takes care of networking operations */
            RequestQueue queue = Volley.newRequestQueue(TempActivity.this);

            /* Server receives a json object, so we need a JSONObject to fill it */
            JSONObject jsonBody = new JSONObject();

            try {
                jsonBody.put("op", "getmesure"); /* service used in the server */
                jsonBody.put("cni", PatientConstants.cni); /* id of patient */
            } catch (JSONException e) {
                e.printStackTrace();
            }

            final String requestBody = jsonBody.toString(); /* Convert JSON to string */
            final String url = HTTPConstants.HTTP_URL; /* server URL */

            final double[] temp = {0}; /* Value(s) of temperature(s) */

            /* as long as exit is true, that means the stop() method is not called */
            while (!exit) {
                /* prepare a String Request to be sent to the server with the POST method */
                StringRequest getRequest = new StringRequest(Request.Method.POST, url,
                        /* get server response */
                        new Response.Listener<String>() {
                            @Override
                            public void onResponse(final String response) {
                                JSONObject resp; /* server sends JSON file, so we need to retrieve it */
                                try {
                                    resp = new JSONObject(response); /* Create a JSON object from response */
                                    /* fetch for array result */
                                    JSONArray JA = resp.getJSONArray("result");
                                    /* get all data, now we need just the first */
                                    for (int i = 0; i < JA.length(); i++) {
                                        JSONObject JO = JA.getJSONObject(i);
                                        String tempS = String.valueOf(JO.get("value"));
                                        temp[0] = Double.parseDouble(tempS);
                                        temperatures.add(temp[0]);
                                        for (int j = 0; j<temperatures.size();j++){
                                            if(temperatures.get(j) < min) min = temperatures.get(j); /* scan for min */
                                            if(temperatures.get(j) > max) max = temperatures.get(j); /* scan for max */
                                        }
                                        /* calculate average */
                                        sum += temp[0];
                                        avg = sum / temperatures.size();
                                        avg = Math.floor(avg * 10) / 10;
                                    }
                                } catch (JSONException e) {
                                    e.printStackTrace();
                                }
                                /* Update views in the UI thread */
                                runOnUiThread(new Runnable() {
                                    @Override
                                    public void run() {
                                        maxTxt.setText(max+"");
                                        minTxt.setText(min+"");
                                        avgTxt.setText(avg+"");
                                        circularProgress.setCurrentProgress(temp[0]); /* temperature will be stored as progress */
                                        /* print customized message */
                                        circularProgress.setProgressTextAdapter(new CircularProgressIndicator.ProgressTextAdapter() {
                                            @NonNull
                                            @Override
                                            public String formatText(double currentProgress) {
                                                return currentProgress + " °C";
                                            }
                                        });
                                    }
                                });
                            }
                        },
                        /* errors management */
                        new Response.ErrorListener() {
                            @Override
                            public void onErrorResponse(final VolleyError error) {
                                Log.e(TAG, "onErrorResponse: " + error.getMessage());
                                runOnUiThread(new Runnable() {
                                    @Override
                                    public void run() {
                                        Toast.makeText(TempActivity.this, "Error: " + error.getMessage(), Toast.LENGTH_SHORT).show();
                                    }
                                });
                            }
                        }
                ) {
                    /* Specify the type of the body to send : json */
                    @Override
                    public String getBodyContentType() {
                        return "application/json; charset=utf-8";
                    }

                    /* send the body */
                    @Override
                    public byte[] getBody() {
                        try {
                            return requestBody.getBytes("utf-8");
                        } catch (UnsupportedEncodingException uee) {
                            VolleyLog.wtf("Unsupported Encoding while trying to get the bytes of %s using %s", requestBody, "utf-8");
                            return null;
                        }
                    }
                };
                /* Add request to queue */
                queue.add(getRequest);

                /* defines periodicity of the thread */
                try {
                    Thread.sleep(60000 * 15);
                } catch (InterruptedException e) {
                    e.printStackTrace();
                }
            }
        }
    }
}