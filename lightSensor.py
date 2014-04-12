#!/usr/bin/env python
import serial
import string
import sys
test=serial.Serial("/dev/cu.usbmodem411",9600)
#test.open()
try:
    while True:
            line = test.readline()
            sys.stdout.write(line)
            sys.stdout.write(str(test.isOpen())+"\n")
            sys.stdout.flush()
                
except KeyboardInterrupt:
    pass # do cleanup here
test.close()
