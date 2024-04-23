CREATE DATABASE messites;
CREATE TABLE site(
    CODE int UNIQUE,
    URL varchar(100),
    nom varchar(20),
    description varchar(10000)
);
 INSERT INTO site(CODE, URL, NOM, DESCRIPTION) VALUES ('1', 'https://facebook.com', 'facebook', 'Reseau social');
 INSERT INTO site(CODE, URL, NOM, DESCRIPTION) VALUES ('2', 'https://www.google.com', 'google', 'moteur de recherche');
 INSERT INTO site(CODE, URL, NOM, DESCRIPTION) VALUES ('3', 'https://www.w3schools.com', 'w3school', 'apprentisssage bases coding');