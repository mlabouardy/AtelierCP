create database projetCP;
create table  Atelier(
 		id_atelier int(10) not null auto_increment,
		nom varchar(25) not null,
		matiere varchar(25) not null,
                lieu varchar(25) not null,
		labo varchar(25) not null,
                animateur varchar(25) not null,
		decription TEXT not null,
		horaires time NOT NULL DEFAULT '00:00:00' ,
		primary key (id_atelier)
                );



