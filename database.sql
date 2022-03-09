CREATE DATABASE `db_amat`;
USE `db_amat`;

CREATE TABLE `user` (
    id INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    status ENUM('') NOT NULL,
    PRIMARY KEY(id) 
);

CREATE TABLE `penduduk` (
    nik VARCHAR(20) NOT NULL,
    nama VARCHAR(50 ) NOT NULL,
    jenis_kelamin VARCHAR(10) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    golongan_darah VARCHAR(2) NOT NULL,
    agama VARCHAR(10) NOT NULL,
    status_nikah VARCHAR(20) NOT NULL,
    pendidikan VARCHAR(20) NOT NULL,
    pekerjaan VARCHAR(50) NOT NULL,
    warga_negara VARCHAR(25) NOT NULL,
    PRIMARY KEY(nik)
);

CREATE TABLE `kelahiran` (
    id int NOT NULL AUTO_INCREMENT,
    nama VARCHAR(35) NOT NULL,
    jenis_kelamin VARCHAR(20) NOT NULL,
    nama_ibu VARCHAR(35) NOT NULL,
    nik_ibu VARCHAR(20) NOT NULL,
    nama_ayah VARCHAR(35) NOT NULL,
    nik_ayah VARCHAR(20) NOT NULL,
    tanggal DATE NOT NULL,
    tempat VARCHAR(35) NOT NULL,
    alamat VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE `kematian` (
    id int NOT NULL AUTO_INCREMENT,
    nik VARCHAR(20) NOT NULL,
    tanggal DATE NOT NULL,
    tempat VARCHAR(35),
    sebab VARCHAR(59),
    PRIMARY KEY(id),
    FOREIGN KEY (nik) REFERENCES penduduk (nik)
);

CREATE TABLE `pindahan` (
    id int NOT NULL AUTO_INCREMENT,
    nik VARCHAR(20) NOT NULL,
    tanggal DATE NOT NULL,
    tempat VARCHAR(35),
    sebab VARCHAR(59),
    PRIMARY KEY(id)
);