CREATE DATABASE IF NOT EXISTS Redlock;

USE Redlock;

CREATE TABLE IF NOT EXISTS users (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(255) NOT NULL,
  Address VARCHAR(255) NOT NULL,
  Position VARCHAR(255) NOT NULL
);


INSERT INTO users (Name, Address, Position) VALUES
  ('Naufal', 'Nganjuk', 'CEO'),
  ('Alfadli', 'Surabaya', 'CFO'),
  ('Puspa', 'Jombang', 'EEO'),
  ('Dewi', 'Malang', 'Database Manager');
