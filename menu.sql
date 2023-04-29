CREATE DATABASE menu;

USE menu;

CREATE TABLE
    menu (
        ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Nama VARCHAR(255) NOT NULL,
        Jumlah INT(11) NOT NULL,
        Harga FLOAT(10, 2) NOT NULL
    );