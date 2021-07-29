create database BioDB;
use BioDB;
create table bio(
FullName varchar(30) primary key,
About1 varchar(50),
About2 varchar(50),
PlaceDOB varchar (30),
Gender enum("Male","Female"),
Religion varchar(20),
Address varchar(160),
Email varchar(50),
PhoneNum varchar(20),
ElementarySch varchar (50),
JuniorHighSch varchar (50),
HighSch varchar (50),
College varchar (50));
select * from bio;
