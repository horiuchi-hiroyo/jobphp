-- コマンドプロンプト

-- DB作成
create database php_practice;
show databases;

-- DB切替
use php_practice;

-- table作成
create table user(
    id int(11) primary key auto_increment,
    name varchar(255) not null,
    mail varchar(255) not null,
    age int(11) not null,
    comments varchar(255) not null
);

desc user;

