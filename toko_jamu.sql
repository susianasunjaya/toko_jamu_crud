create database toko_jamu;

use toko_jamu;

CREATE TABLE jamu_products( id int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL, merk varchar(255) NOT NULL, variety ENUM('Beras Kencur','Kunyit Asam','Temulawak','Galian Singset','Brotowali','Others') NOT NULL, stock int(20) NOT NULL, price int(20) NOT NULL );
