CREATE DATABASE stellar_resume;
USE stellar_resume;

CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(150),
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE portfolio (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150),
  description TEXT,
  link VARCHAR(255)
);

CREATE TABLE profile (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  job VARCHAR(100),
  email VARCHAR(150),
  photo VARCHAR(255)
);

INSERT INTO profile (name, job, email)
VALUES ('DIANTA DANISWARA PUTRA','Frontend Developer','danisdiantra@gmail.com');
