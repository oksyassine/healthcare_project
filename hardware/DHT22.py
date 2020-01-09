import json
import os
import time
import Adafruit_DHT

import sys
from time import sleep
DHTpin = 22

try:
    
    update = True
    while update:
        from datetime import datetime
        now = datetime.now()
        datetime = now.strftime('%Y-%m-%d %H:%M:%S')
    
        humidity, temperature = Adafruit_DHT.read_retry(11, DHTpin)
        if humidity is not None and temperature is not None:
         hum = round(humidity)
         temp = round(temperature)
         print('Temp:{:.1f}C'.format(temp))
         #print('Hum:{:.1f}'.format(hum))
        
         
	 my_details = {
    'Date': datetime,
    'Temperature': temp,
    'Pouls':70
}

         with open('patient.json','w') as json_file:
              
              json.dump(my_details, json_file)
                   
       
         os.system("sshpass -p 'GOLFhotel' scp -P 22 patient.json younes@192.168.8.25:/home/younes/output/patient.json")
#sshpass -p '' scp /opt/lampp/htdocs/patient.json medic@40.71.87.181:/C:/xampp/htdocs/
        print("Inserted Record")
        
        sleep(10)  # reading sensor data in every 1 minute
except Exception as e:
        print (e)
        update = False
        



