-- DROP DATABASE YMCA; 

CREATE DATABASE YMCA;
USE YMCA;

CREATE TABLE user VALUES(
    idUser INT NOT NULL,
    name VARCHAR(50),
    lastname VARCHAR(100),
    birthdate DATE,
    birthplace CHAR(3),
    curp VARCHAR(18),
    address INT NOT NULL,
);

CREATE TABLE status_user VALUES(
    idUser INT NOT NULL,
    status VARCHAR(50),

);

CREATE TABLE tutor VALUES(
    curp VARCHAR(18),
    name VARCHAR(50),
    lastname VARCHAR(100),
    contact VARCHAR(15),
    birthdate DATE,
    maritalStatus CHAR(50),
    education CHAR(50),
    acknowledge TINYINT(1),
);

CREATE TABLE address VALUES(
    idUser INT NOT NULL,
    street VARCHAR(100),
    city VARCHAR(50),
    state CHAR(3),
    zipcode INT(5),
    reference VARCHAR(100),
    contact VARCHAR(15)
):

CREATE TABLE alergies VALUES(
    idUser INT NOT NULL,
    type VARCHAR(50)
);

CREATE TABLE observations VALUES(
    idUser INT NOT NULL,
    observation TEXT
);


CREATE TABLE states VALUES(
    idState CHAR(3),
    name VARCHAR(50)
);





