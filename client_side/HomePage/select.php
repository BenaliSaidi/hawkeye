<?php 
include "config_db.php" ;

$select_1 = $connexion->query('SELECT * FROM news ORDER BY id DESC LIMIT 1') ;
$select_2 = $connexion->query('SELECT * FROM news  ORDER BY id DESC LIMIT 1,1 ');
$select_3 = $connexion->query('SELECT * FROM news  ORDER BY id DESC LIMIT 2,1 ');
$select_4 = $connexion->query('SELECT * FROM news  ORDER BY id DESC LIMIT 3,1 ');               
$select_5 = $connexion->query('SELECT * FROM news  ORDER BY id DESC LIMIT 4,1 ');
$select_6 = $connexion->query('SELECT * FROM news  ORDER BY id DESC LIMIT 5,1 ');
$select_7 = $connexion->query('SELECT * FROM news  ORDER BY id DESC LIMIT 6,1 ');
$select_8 = $connexion->query('SELECT * FROM news  ORDER BY id DESC LIMIT 7,1 ');
              
$select_10 = $connexion->query('SELECT * FROM news WHERE slide = 1 ORDER BY id DESC LIMIT 5 ');
$select_11 = $connexion->query('SELECT * FROM news WHERE slide = 1 ORDER BY id DESC LIMIT 1,1 ');
$select_12 = $connexion->query('SELECT * FROM news WHERE slide = 1 ORDER BY id DESC LIMIT 2,1 ');
$select_13 = $connexion->query('SELECT * FROM news WHERE slide = 1 ORDER BY id DESC LIMIT 3,1 ');
$select_14 = $connexion->query('SELECT * FROM news WHERE slide = 1 ORDER BY id DESC LIMIT 4,1 ');

$select_15 = $connexion->query('SELECT * FROM videos ORDER BY ID DESC LIMIT 19 ');

$select_16 = $connexion->query('SELECT * FROM leagues ');
?>