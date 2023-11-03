CREATE DATABASE IF NOT EXISTS midata;

use midata;

CREATE TABLE usuario(
    Id int(11) auto_increment not null,
    nombre varchar(255),
    cedula varchar(100),

    CONSTRAINT pk_usuario PRIMARY KEY(Id)
);