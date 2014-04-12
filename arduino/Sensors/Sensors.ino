double Fahrenheit(double celsius)
{
	return 1.8 * celsius + 32;
}

#include <dht.h>

dht DHT;

#define DHT11_PIN 3

int sensorValue;
int sensorLow = 0;
int sensorHigh = 1023;

void setup()
{
  Serial.begin(9600);
}

void loop()
{
  delay(1000);
  int chk = DHT.read11(DHT11_PIN);
  double fTemp = Fahrenheit(DHT.temperature);
  Serial.print ("Humidity (%): ");
  Serial.print(DHT.humidity, 1);
  Serial.print(",\tTemperature (F): ");
  Serial.println(fTemp, 1);
  
  sensorValue = analogRead(A0);
  int i = map(sensorValue, sensorLow, sensorHigh, 0, 100);
  
  Serial.print("Light Frequency: ");
  Serial.println(i);
  
  delay(1000);
}

