drop database if exists zeus;
create database zeus;

use zeus;

create table agent
(
    idA int(6) not null auto_increment,
    nomA varchar(25),
    prenomA varchar(25),
    login varchar(50),
    mdp varchar(50),
    adresse varchar(25),
    codepostal varchar(6),
    ville varchar(25),
    dateDebContrat varchar(10),
    dateFinContrat varchar(10),
    primary key(idA)
);

insert into agent (idA,nomA,prenomA,login,mdp,adresse,codepostal,ville,dateDebContrat,dateFinContrat)
values(null,"marmelade","jean","jm","123","6 Avenue Foxtrot","75001","Paris","2016-09-06","2018-01-03");

create table chauffeur
(
    idA int(6) not null auto_increment,
    permis varchar(4),
    primary key(idA),
    foreign key(idA) references agent(idA)
);

create table traitement
(
    idA int(6) not null,
    primary key(idA),
    foreign key(idA) references agent(idA)
);

create table recruteur
(
    idA int(6) not null,
    primary key(idA),
    foreign key(idA) references agent(idA)
);

create table typeActivite 
(
    idTA int(6) not null,
    libelle varchar(25),
    primary key(idTA)
);

create table lieu
(
    idL int(6) not null auto_increment,
    nomL varchar(25),
    codepostalL varchar(6),
    villeL varchar(25),
    primary key(idL)
);

create table bureau
(
    idS int(6) not null,
    primary key(idS),
    foreign key(idS) references unsite(idS)
);

create table garage
(
    idS int(6) not null,
    primary key(idS),
    foreign key(idS) references unsite(idS)
);

create table centre
(
    idS int(6) not null,
    primary key(idS),
    foreign key(idS) references unsite(idS)
);


create table typeSite
(
    idSt int(6) not null auto_increment,
    libelle varchar(25),
    primary key(idSt)
);