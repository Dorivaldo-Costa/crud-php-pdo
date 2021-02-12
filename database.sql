create database empresa;

use empresa;

create table pessoas(
    id int(11) auto_increment primary key,
    nome varchar(30) not null,
    email varchar(60) not null
);


