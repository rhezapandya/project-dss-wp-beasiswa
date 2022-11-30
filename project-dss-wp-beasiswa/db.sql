create database projectdss;
use projectdss;

create table criteria(
    id int(3) not null primary key,
    email varchar(255) not null,
    password varchar(255) not null,
    Name_User varchar(100) not null,
    Born_Date date not null
);