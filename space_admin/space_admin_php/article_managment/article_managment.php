<?php 
    include 'config_db.php';
    
    $select_1= $connexion->query('SELECT * FROM news ORDER BY ID DESC ') ;				
?>
<!DOCTYPE html>
<html>
    <head>
        <title>article</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="\my_projet\space_admin\space_admin_css\article--managment.css">
        <link rel="stylesheet" href="\my_projet\space_admin\space_admin_css\article_managment_grid.css">
    </head>
	<body>
		<div class="container">

			<div class="return">	
				<form action="admin_space.html">	
						<input class="back" type="submit" value="Return To Admin Space">
				</form>	
			</div>	

			<div  class="add-article">				
				<form action="writing.php" >	
						<input class="new-article" type="submit" value="Add Article">	
				</form>	
			</div>	

			<div class="article">
				<form >
						<?php while($row = $select_1-> fetch()){
									  $array = $row['title'];
									  $array_1 = $row['paragraphe']; ?>
						<div class="section">
							<h1 ><?php echo $array  ; ?> </h1>
							<p><?php echo $array_1 ; ?>	</p>
							<div class="hover_btn up_date">					
									<a class="RUD" href="writing.php?edit=<?= $row['id'] ?>">Up date</a>	
							</div>
							<div class="hover_btn delete">
									<a class="RUD" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
							</div>
							<div class="hover_btn read">
									<a class="RUD" href="view.php?id=<?= $row['id'] ?>">Read More</a>
							</div>
							<hr>	
						</div>
					<?php	} ?>
											
				</form>
			</div>	
		</div>
	</body>
</html>	