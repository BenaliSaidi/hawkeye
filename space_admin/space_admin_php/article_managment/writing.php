<?php
	 		session_start();	
 				include 'config_db.php';
				$mode_edition = 0;
				if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
				   $mode_edition = 1;
				   $edit_id = htmlspecialchars($_GET['edit']);
				   $edit_article = $connexion->prepare('SELECT * FROM news WHERE id = ?');
				   $edit_article->execute(array($edit_id));
				   if($edit_article->rowCount() == 1) {
				      $edit_article = $edit_article->fetch();
				   } 
				   else {
				      die('Erreur : l\'article n\'existe pas...');
				   }
				}
				if (isset($_POST["save"])){
					$title = $_POST['title'];
					$paragraphe = $_POST['paragraphe'];
					if($mode_edition == 0) {
						if (isset($_POST['slide'])) {
							$insertion = "INSERT INTO news (title , paragraphe , slide , date_of_PuB ) 
							VALUES (:title , :paragraphe , TRUE , Now() )" ;
							$stmt = $connexion->prepare($insertion);
							$stmt-> bindParam(':title', $title );
							$stmt-> bindParam(':paragraphe', $paragraphe );
							$stmt -> execute();
							$last_id = $connexion->lastInsertId();
							$chemin = 'miniature/'.$last_id .'.jpg';
							move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin );
						}
						else{
							$insertion = "INSERT INTO news (title , paragraphe , slide , date_of_PuB ) 
							VALUES (:title , :paragraphe , FALSE ,  Now() )" ;
							$stmt = $connexion->prepare($insertion);
							$stmt-> bindParam(':title', $title );
							$stmt-> bindParam(':paragraphe', $paragraphe );
							$stmt -> execute();
							$last_id = $connexion->lastInsertId();
							$chemin = 'miniature/'.$last_id .'.jpg';
							move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin );
						}
						$message = 'Your article has been posted';
					}
					else{
						if (isset($_POST['slide'])) {
							$update = $connexion->prepare('UPDATE news SET title = ?, paragraphe = ?, slide = TRUE ,  daate_edit = NOW() WHERE id = ?');
					        $update->execute(array($title, $paragraphe, $image , $edit_id ));
					        header('Location:/my_projet/space_admin/space_admin_php/article_managment/article_managment.php');
					        $message = 'Votre article a bien été mis à jour !';
					    }
					    else{
					    	$update = $connexion->prepare('UPDATE news SET title = ?, paragraphe = ?, slide = FALSE,  daate_edit = NOW() WHERE id = ?');
					        $update->execute(array($title, $paragraphe, $image , $edit_id ));
					        header('Location:/my_projet/space_admin/space_admin_php/article_managment/article_managment.php');
					        $message = 'Votre article a bien été mis à jour !';
					    }
					}
				}
					?>
<!DOCTYPE html>
<html>
    <head>
        <title>article</title>
        <meta charset='utf-8'>
        <link rel="stylesheet"  href="\my_projet\space_admin\space_admin_css/writing1.css">
        <link rel="stylesheet"  href="\my_projet\space_admin\space_admin_css/writing_grid.css">
    </head>
<body>
		<form class="container" method="POST" enctype="multipart/form-data" >	
		 	<div class="return">
				<a class="back" href="/my_projet/space_admin/space_admin_php/article_managment/article_managment.php">
				Return to Article managment</a>
			</div>	
			<div class="news" >	
					<textarea class="title_css" type="text" name="title" placeholder="  write your Title " required
					<?php if($mode_edition == 1) { ?> 
				    value="<?= $edit_article['title'] ?>"
				    <?php } ?>  ></textarea>
				    <textarea class="paragraphe_css"  type="text" name="paragraphe" placeholder="  write your Article" required 
					<?php if($mode_edition == 1) { ?>
		      		value = "<?= $edit_article['paragraphe'] ?>"
		      		<?php } ?> ></textarea>
				<div class="file_input">
					<input  class="inputfile" type="file" name="miniature" id="file"  />
					<label id="hover_btn" for="file">Choose an image</label>
				</div> 
				<div class= C>
	                <input class="btn_save" type="submit" name="save" value= "save" id="disp_button">
	        	</div> 
				<div>
					<p><input type="checkbox" name="slide[]" value="slidee"> add article to slide </p>
				</div>
				
			</div>
		</form>
</body>   
</html> 


