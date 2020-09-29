<?php

$servername = "localhost";
$dbname = "tourism";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connexion ok :)";
} catch(PDOException $e) {
  echo "Connexion pas ok :(" . $e->getMessage();
}




?>
