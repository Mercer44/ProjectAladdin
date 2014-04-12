
int sensorValue;
// variable to calibrate low value
int sensorLow = 0;
// variable to calibrate high value
int sensorHigh = 1023;
// LED pin

void setup() {
  Serial.begin(9600);
}

void loop() {
  //read the input from A0 and store it in a variable
  sensorValue = analogRead(A0);
  
  // map the sensor values to a wide range of pitches
  int i = map(sensorValue, sensorLow, sensorHigh, 0, 100);
  Serial.println(i);  
  // play the tone for 20 ms on pin 8

  // wait for a moment
  delay(1000);
}

