<?php
include 'config_db.php';
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $connexion->prepare('DELETE FROM news WHERE id = ?');
   $suppr->execute(array($suppr_id));
   header('Location: \my_projet\space_admin\space_admin_php/article_managment.php');
   ;
}
?>