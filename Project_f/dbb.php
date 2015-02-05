<?php
$host = "localhost";
$user = "root";
$pass = null;
$dbname = "fleam";

if (!new PDO("mysql:host=$host;dbname=$dbname", $user, $pass))
{
	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE TABLE Users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		pseudo VARCHAR(30),
		email VARCHAR(50),
		reg_date TIMESTAMP	
		)";

		$conn->exec($sql);
		echo "Users a bien ete cree";
		}
	
	catch(PDOException $e) {
		echo $sql . "<br/>" . $e->getMessage();
	}
	$conn = null;
}
else
{
	
}