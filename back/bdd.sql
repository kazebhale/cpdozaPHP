
create database dbcpdoza;

create table `parent`(
    `matriculeParent` varchar(50),
    `nomParent` varchar(30),
    `prenomParent` varchar(30),
    `AdresseParent` varchar(40),
    `motDePasse` varchar(30),
    constraint pk_pa primary key(`matriculeParent`)
);

create table eleve (
    `matriculeEleve` varchar(50),
    `nomEleve` varchar(30),
    `dateNaissEleve` date,
    `lieuNaissEleve` varchar(30),
    `AdresseEleve` varchar(40),
    `prenomEleve` varchar(30),
    `motDePasse` varchar(30),
    `matriculeParent` varchar(30),
    constraint pk_el primary key(`matriculeEleve`)
);

alter table eleve add constraint fk_elPa foreign key(`matriculeParent`) references parent(`matriculeParent`);

insert into parent values("bhkd7777","john","cedric","new york","cedric15");

insert into eleve values("abcdefghi12345","john",20/05/1996,"new york","manatane","doh","john15","bhkd7777");