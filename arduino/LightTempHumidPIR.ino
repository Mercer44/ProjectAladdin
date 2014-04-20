
#include <dht.h>

dht DHT;

#define DHT11_PIN 3

int sensorValue;
// variable to calibrate low value
int sensorLow = 0;
// variable to calibrate high value
int sensorHigh = 1023;
// LED pin

int inputPin = 6;               // choose the input pin (for PIR sensor)
int pirState = LOW;             // we start, assuming no motion detected
int val = 0;                    // variable for reading the pin status
int ledPin =13;                 // pin for the LED
void setup() {
  pinMode(inputPin, INPUT);     // declare sensor as input
  pinMode(ledPin, OUTPUT); 
  Serial.begin(9600);
}

void loop() {
  //read the input from A0 and store it in a variable
  sensorValue = analogRead(A0);
  
  // map the sensor values to a wide range of pitches
  int i = map(sensorValue, sensorLow, sensorHigh, 0, 100);
  Serial.print("Light:");
  Serial.println(i);  
  // play the tone for 20 ms on pin 8
  delay(1000);

  int chk = DHT.read11(DHT11_PIN);
  double fTemp = Fahrenheit(DHT.temperature);
  Serial.print ("Humidity (%): ");
  Serial.print(DHT.humidity, 1);
  Serial.print(",\tTemperature (F): ");
  Serial.println(fTemp, 1);

  // wait for a moment
  delay(1000);

    val = digitalRead(inputPin);  // read input value
  if (val == HIGH) {            // check if the input is HIGH
   digitalWrite(ledPin, HIGH);  // turn LED ON
    if (pirState == LOW) {
      // we have just turned on
      Serial.println("Motion detected!");
      // We only want to print on the output change, not state
      pirState = HIGH;
    }
  } else {
  digitalWrite(ledPin, LOW); // turn LED OFF
    if (pirState == HIGH){
      // we have just turned off
      Serial.println("Motion ended!");
      // We only want to print on the output change, not state
      pirState = LOW;
    }
  }
}

double Fahrenheit(double celsius)
{
	return 1.8 * celsius + 32;
}