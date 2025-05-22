CREATE DATABASE IF NOT EXISTS komunitas;
USE komunitas;

CREATE TABLE anggota (
  id INT PRIMARY KEY,
  nama VARCHAR(100),
  nik VARCHAR(20),
  alamat TEXT,
  email VARCHAR(100),
  jenis_kelamin VARCHAR(15)
);
