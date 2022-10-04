STEPS TO CONNECT TO THE MYSQL DATABASE

-->Download MYSQL from the official site:-"https://dev.mysql.com/downloads/mysql/"

-->After Successful installation and setup connect it with php using mysqli_connect(server,user,password,database),
wherein:-
'server' is the current server MYSQL is running on, 
'user' is the user type(with respective access control),
your set password and the desired database.

TO CREATE DATABASE AND THE TABLE TO STORE DATA FROM THE FORM FOLLOW THESE STEPS-->

1)To create database:-
mysql>create database contact_db;

2)to create table to store the data

mysql>create table contact_form(
id int(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(20) NOT NULL,
email varchar(50) NOT NULL,
message mediumtext NOT NULL);
