create database red_cms;
use red_cms;

create table posts(
  id integer not null primary key auto_increment,
  date varchar(255),
  title varchar(255),
  content varchar(255)
);

create table pages(
  id integer not null primary key auto_increment,
  title varchar(255),
  content varchar(255)
);

