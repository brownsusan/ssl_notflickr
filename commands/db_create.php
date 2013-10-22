<?php

$pdo = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");

$query = $pdo -> prepare('CREATE TABLE IF NOT EXISTS images (
	imageId INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
	userId INT,
	title VARCHAR(100),
	description TEXT,
	filePath TEXT
)');
$query -> execute();

$query = $pdo -> prepare('CREATE TABLE IF NOT EXISTS users (
	userId INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50),
	firstName VARCHAR(50),
	lastName VARCHAR(50),
	password VARCHAR(32),
	email VARCHAR(80)
)');
$query -> execute();