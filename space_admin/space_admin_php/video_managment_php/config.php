<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hawkeye";
    

try {
	$connexion = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }  
catch(PDOException $e) {
	echo $e->getMessage();
}

?>