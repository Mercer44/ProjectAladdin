double Fahrenheit(double celsius)
{
	return 1.8 * celsius + 32;
}

#include <dht.h>

dht DHT;

#define DHT11_PIN 3


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
  
  delay(1000);
}

