

void setup() {
 
  pinMode(4, OUTPUT);
  digitalWrite(4, HIGH);
  Serial.begin(9600); 
  
}

void loop() {
  delay(10000);
  digitalWrite(4, LOW);
  delay(10000);
  digitalWrite(4, HIGH);
  
             
}
