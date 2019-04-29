-- DROP DATABASE YMCA; 

CREATE DATABASE YMCA;
USE YMCA;


CREATE TABLE student(
    idStudent INT NOT NULL,
    name VARCHAR(50),
    lastname VARCHAR(100),
    birthdate DATE,
    birthplace CHAR(3),
    curp VARCHAR(18),
    address INT NOT NULL,

    PRIMARY KEY (idStudent)
);

CREATE TABLE teacher(
    idTeacher INT NOT NULL,
    name VARCHAR(100),
    lastname VARCHAR(100),

    PRIMARY KEY (idTeacher)
);
CREATE TABLE program(
    idProgram INT NOT NULL,
    name VARCHAR(150),
    capacity INT NOT NULL,
    schedule VARCHAR(100),
    cost INT,

    PRIMARY KEY (idProgram)
);

CREATE TABLE statusTypes(
    idStatus INT NOT NULL,
    name VARCHAR(50),

    PRIMARY KEY (idStatus)
);

CREATE TABLE states(
    idState CHAR(3),
    name VARCHAR(50),

    PRIMARY KEY (idState)
);

CREATE TABLE tutor(
    curp VARCHAR(18),
    name VARCHAR(50),
    lastname VARCHAR(100),
    contact VARCHAR(15),
    birthdate DATE,
    maritalStatus CHAR(50),
    education CHAR(50),
    acknowledge TINYINT(1),

    PRIMARY KEY (curp)
);
CREATE TABLE socio_economic_study(
    idStudy INT NOT NULL,
    idStudent INT NOT NULL,
    housingType VARCHAR(100),
    housingTenure VARCHAR(100),
    dimensions VARCHAR(50),
    walls VARCHAR(50),
    roofs VARCHAR(50),
    floors VARCHAR(50),
    rooms INT NOT NULL,
    lightbulbs VARCHAR(50),
    familyCondition VARCHAR(50),
    familyCategory VARCHAR(50),
    familyAlimentation VARCHAR(50),
    totalIncome VARCHAR(20),
    totalOutcome VARCHAR(20),
    healthService VARCHAR(30),
    vacations INT NOT NULL,

    PRIMARY KEY (idStudy, idStudent),
    FOREIGN KEY (idStudent) REFERENCES student(idStudent)
);

CREATE TABLE status_student(
    idStudent INT NOT NULL,
    studentStatus INT NOT NULL,
    limitDate DATE,

    PRIMARY KEY (idStudent, studentStatus),
    FOREIGN KEY (idStudent) REFERENCES student(idStudent),
    FOREIGN KEY (studentStatus) REFERENCES statusTypes(idStatus)
);

CREATE TABLE address(
    idStudent INT NOT NULL,
    street VARCHAR(100),
    city VARCHAR(50),
    state CHAR(3),
    zipcode INT(5),
    reference VARCHAR(100),
    contact VARCHAR(15),

    PRIMARY KEY (idStudent),
    FOREIGN KEY (idStudent) REFERENCES student(idStudent),
    FOREIGN KEY (state) REFERENCES states(idState)
);

CREATE TABLE alergies(
    idStudent INT NOT NULL,
    type VARCHAR(50),

    PRIMARY KEY (idStudent),
    FOREIGN KEY (idStudent) REFERENCES student(idStudent)
);

CREATE TABLE observations(
    idStudent INT NOT NULL,
    observation TEXT,

    PRIMARY KEY (idStudent),
    FOREIGN KEY (idStudent) REFERENCES student(idStudent)
);

CREATE TABLE family_disabilities(
    idStudy INT NOT NULL,
    relationship CHAR(50),
    type CHAR(50),
    name VARCHAR(50),

    PRIMARY KEY (idStudy),
    FOREIGN KEY (idStudy) REFERENCES socio_economic_study(idStudy)
);

CREATE TABLE inscription(
    idStudent INT NOT NULL,
    program INT NOT NULL,
    inscription DATE,
    departure DATE,
    classroom VARCHAR(20),
    teacher INT NOT NULL,

    PRIMARY KEY (idStudent, program),
    FOREIGN KEY (idStudent) REFERENCES student(idStudent),
    FOREIGN KEY (program) REFERENCES program(idProgram),
    FOREIGN KEY (teacher) REFERENCES teacher(idTeacher)
);
