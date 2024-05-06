# deber1
cliente servidor


# Creacion de base de datos 
  
CREATE DATABASE db;
USE db;

 CREATE TABLE IF NOT EXISTS users (
   id int(11) NOT NULL AUTO_INCREMENT,
   username varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   clave varchar(255) NOT NULL,
   PRIMARY KEY (id)
   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
   
# En MYSQL con la version minima de 8.0 workbench  
