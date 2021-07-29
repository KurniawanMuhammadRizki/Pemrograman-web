create database finalweb;
use finalweb;
create table mhs(
nim varchar(11) primary key,
nama varchar (30),
ttangal varchar (30),
jk enum(("Laki-Laki","Perempuan"),
Agama varchar(20),
alamat varchar(50),
email varchar(30),
nohp varchar (20),
sd varchar (30),
smp varchar (30),
sma varchar (30));

select * from mhs;
