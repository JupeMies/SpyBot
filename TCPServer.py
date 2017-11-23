#!/usr/bin/env python

import socket


TCP_IP = '192.168.1.37'
TCP_PORT = 5005
BUFFER_SIZE = 20  # Normally 1024, but we want fast response

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
print ('Socket created. Waiting for connections...')
s.bind((TCP_IP, TCP_PORT))
s.listen(1)
conn, addr = s.accept()
print ('Connection address:', addr)
while 1:
    #data = conn.recv(BUFFER_SIZE)
    #if not data: break
    #print ("received data:", data)
    #conn.send(data)  # echo
    suunta =input('Anna suunta')
    suunta_encode = str.encode(suunta)
    conn.send(suunta_encode)
#conn.close()
