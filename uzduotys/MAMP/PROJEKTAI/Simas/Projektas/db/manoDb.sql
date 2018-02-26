USE projektas_1;

CREATE TABLE programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    antraste VARCHAR(1000),
    paragrafas_1 VARCHAR(10000),
    paragrafas_2 VARCHAR(10000)
);

CREATE TABLE contact_me (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vardas  VARCHAR(100),
    pavarde VARCHAR(100),
    email VARCHAR(100),
    zinute VARCHAR(1000)
);

CREATE TABLE newsletters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vardas  VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE coaching (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vardas  VARCHAR(100),
    pavarde VARCHAR(100),
    telefonas VARCHAR(12),
    email VARCHAR(100)
);

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vardas  VARCHAR(50),
    pavarde VARCHAR(50),
    user VARCHAR(30),
    password VARCHAR(30),
    telefonas VARCHAR(12),
    email VARCHAR(50)
);




