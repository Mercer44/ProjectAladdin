CREATE TABLE Floors(
ID INT NOT NULL,
Description VARCHAR(32),
PRIMARY KEY(ID)
);

CREATE TABLE Rooms(
ID INT NOT NULL,
Floor_ID INT NOT NULL,
Description VARCHAR(32),
PRIMARY KEY(ID),
FOREIGN KEY(Floor_ID) REFERENCES Floors(ID)
);

CREATE TABLE RaspPi(
ID INT NOT NULL,
IP INT NOT NULL,
Room_ID INT NOT NULL,
Location_Desc VARCHAR(32),
JoinTime TIMESTAMP NOT NULL,
Pic_Location VARCHAR(128),
PRIMARY KEY(ID),
FOREIGN KEY(Room_ID) REFERENCES Rooms(ID)
);

CREATE TABLE Module(
ID INT NOT NULL,
Pi_ID INT NOT NULL,
PRIMARY KEY(ID),
FOREIGN KEY(Pi_ID) REFERENCES RaspPi(ID)
);

CREATE TABLE Light_M(
M_ID INT NOT NULL,
State INT NOT NULL,
PRIMARY KEY(M_ID),
FOREIGN KEY(M_ID) REFERENCES Module(ID)
);

CREATE TABLE Sound_M(
M_ID INT NOT NULL,
Volume INT NOT NULL,
Time_Start INT NOT NULL,
Time_End INT,
PRIMARY KEY(M_ID),
FOREIGN KEY(M_ID) REFERENCES Module(ID)
);

CREATE TABLE Environment_M(
M_ID INT NOT NULL,
Temp INT NOT NULL,
Humidity INT NOT NULL,
LightFrequency INT NOT NULL,
PRIMARY KEY(M_ID),
FOREIGN KEY(M_ID) REFERENCES Module(ID)
);

CREATE TABLE Lock_M(
M_ID INT NOT NULL,
Time_Opened TIMESTAMP NOT NULL,
Time_Closed TIMESTAMP,
State BIT(1) NOT NULL,
PRIMARY KEY(M_ID),
FOREIGN KEY(M_ID) REFERENCES Module(ID)
);

CREATE TABLE Motion_M(
M_ID INT NOT NULL,
Motion_Start TIMESTAMP NOT NULL,
Motion_End TIMESTAMP,
PRIMARY KEY(M_ID),
FOREIGN KEY(M_ID) REFERENCES Module(ID)
);

CREATE TABLE Screenshot(
Motion_ID INT NOT NULL,
Camera INT NOT NULL,
File_Name VARCHAR(60) NOT NULL,
Frame INT NOT NULL,
File_Type INT NOT NULL,
Time_Stamp TIMESTAMP NOT NULL,
Text_Event TIMESTAMP NOT NULL,
FOREIGN KEY(Motion_ID) References Motion_M(M_ID)
);

CREATE TABLE Users(
UserID INT NOT NULL,
UserName VARCHAR(32) NOT NULL,
IpAddr INT NOT NULL,
PRIMARY KEY(UserID)
);
