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

create table users(
  id integer not null primary key auto_increment,
  username varchar(255),
  password varchar(255),
  email varchar(255)
);

create table tags(
  id integer not null primary key auto_increment,
  tag varchar(255)
);

create table post_tags(
  id integer not null primary key auto_increment,
  post_id integer,
  tag_id integer,
  date datetime
);

create table post_comments(
  id integer not null primary key auto_increment,
  post_id integer,
  date datetime,
  name varchar(255),
  email varchar(255),
  comments mediumtext
);

alter table posts add user_id integer;
alter table posts change content content mediumtext;
alter table pages add name varchar(255);

