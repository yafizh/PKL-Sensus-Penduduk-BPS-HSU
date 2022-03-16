DROP DATABASE IF EXISTS `db_amat`;
CREATE DATABASE `db_amat`;
USE `db_amat`;

CREATE TABLE `user` (
    id INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    status ENUM('ADMIN', 'PEGAWAI') NOT NULL,
    PRIMARY KEY(id) 
);

INSERT INTO `user` (
    nama,
    username,
    password,
    status 
) VALUES 
('Admin', 'admin', 'admin', 'ADMIN'),
('Ahmad Rifai', 'rifai', 'rifai', 'PEGAWAI');

CREATE TABLE `penduduk` (
    id INT NOT NULL AUTO_INCREMENT,
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
    PRIMARY KEY(id)
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
    nama varchar(35) NOT NULL,
    jenis_kelamin VARCHAR(20) NOT NULL,
    tempat_lahir VARCHAR(35) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    status_nikah VARCHAR(20) NOT NULL,
    agama VARCHAR(20) NOT NULL,
    alamat VARCHAR(50) NOT NULL,
    tanggal DATE NOT NULL,
    tempat VARCHAR(35),
    sebab VARCHAR(59),
    PRIMARY KEY(id)
);

CREATE TABLE `pindahan` (
    id int NOT NULL AUTO_INCREMENT,
    nik VARCHAR(20) NOT NULL,
    nama VARCHAR(255) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    rt VARCHAR(255) NOT NULL,
    rw VARCHAR(255) NOT NULL,
    desa VARCHAR(255) NOT NULL,
    kabupaten VARCHAR(255) NOT NULL,
    kecamatan VARCHAR(255) NOT NULL,
    provinsi VARCHAR(255) NOT NULL,
    tanggal DATE,
    PRIMARY KEY(id)
);

CREATE TABLE `kedatangan` (
    id int NOT NULL AUTO_INCREMENT,
    nik VARCHAR(20) NOT NULL,
    nama VARCHAR(255) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    rt VARCHAR(255) NOT NULL,
    rw VARCHAR(255) NOT NULL,
    desa VARCHAR(255) NOT NULL,
    kabupaten VARCHAR(255) NOT NULL,
    kecamatan VARCHAR(255) NOT NULL,
    provinsi VARCHAR(255) NOT NULL,
    tanggal DATE,
    PRIMARY KEY(id)
);