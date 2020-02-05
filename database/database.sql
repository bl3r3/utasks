CREATE DATABASE tasks;

USE tasks;

CREATE TABLE IF NOT EXISTS users(
	ID INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Name VARCHAR(100) NOT NULL,
	Email VARCHAR(100)NOT NULL,
	passw CHAR(60) NOT NULL
);

DESCRIBE users;

CREATE TABLE IF NOT EXISTS task(
	task_ID INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	user_ID INT NOT NULL,
	FOREIGN KEY user_ID(user_ID) REFERENCES users(ID),
	title VARCHAR(60),
	description TEXT,
	create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;
