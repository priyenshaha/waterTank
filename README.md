# waterTank

This project is an IoT based water tank controller and monitor on a large scale in a widespread campus.
It aims at data collection from many tanks over WLAN / RF(absense of WLAN) and push it to server.
Water and electricity Usage estimation is performed and user can visualize the entire system through the website

This part, however is about the embedded coding required. There are different hardwares for water tank monitoring and single phase motor control.
The data is logged into a mySQL server via PHP based scripts and relevant actions to be performed are sent back in response
Multiple tanks and single motor scenario is considered in this project
