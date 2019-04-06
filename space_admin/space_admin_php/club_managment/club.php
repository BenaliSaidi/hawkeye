<?php
include '../article_managment/config_db.php';

$select = $connexion->query("SELECT idleague FROM leagues ");


if (isset($_POST["save"])){
	$league = $_POST['league'];
	$team = $_POST['team'];
	$rank = $_POST['rank'];
    $valeur = $_POST['valeur'];
	$avg_spec = $_POST['avg_spec'];
	$founded = $_POST['founded'];
	$cup = $_POST['cup'];
	$nameimg = $_FILES["imgclub"]["name"];

	$chemin = 'image/'.$nameimg;
	move_uploaded_file($_FILES['imgclub']['tmp_name'], $chemin ); 

	$insertion = "INSERT INTO clubs ( idleague , team , rank ,valeur , avgspec ,founded ,cup ,imgclub ) 
					VALUES ( :league , :team , :rank , :valeur , :avg_spec ,:founded , :cup , :imgclub   )" ;
	$stmt = $connexion->prepare($insertion);

	$stmt-> bindParam(':league', $league );
	$stmt-> bindParam(':team', $team );
    $stmt-> bindParam(':rank', $rank );
    $stmt-> bindParam(':valeur', $valeur );
	$stmt-> bindParam(':avg_spec', $avg_spec );
	$stmt-> bindParam(':founded', $founded );
	$stmt-> bindParam(':cup', $cup );
	$stmt-> bindParam(':imgclub', $nameimg );

	$stmt -> execute();


}

 ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Club</title>
        <meta charset='utf-8'>
       	<link rel="stylesheet" type="text/css" href="\my_projet\space_admin\space_admin_css\club_management_css\league.css">
       <link rel="stylesheet" type="text/css" href="\my_projet\space_admin\space_admin_css\club_management_css\club_grid.css">
    </head>
<body>

		<div class="container">

		<div class="return">
				<a class="back" href="\my_projet\space_admin\space_admin_php\article_managment\admin_space.html">
				Return To Admin Space</a>
		</div>	

		<div class="Addleague">
				<a class="LEAGUE" href="\my_projet\space_admin\space_admin_php\club_managment\league.php">
				Add League</a>
		</div>

		<form class="info_team" method="POST" enctype="multipart/form-data" >	
				
			
                <label class="deco" for="league">League</label>
                <select id="league" name="league" class="style all_League">
                    <?php while ($row = $select->fetch()) {
                        $legu = $row['idleague'];?>
                        <option> <?php echo $legu; ?> </option>
                    <?php }  ?>     
                </select>   

			<label class="deco " for="team"> Team </label>
			<input  class="style team" type="text" name="team" id="team" required>	

			<label class="deco " for="founded"> Founded </label>
			<input  class="style founded" type="date" name="founded" id="founded" required>

			<label class="deco" for="rank"> Rank </label>
			<input class="style rank" id="rank" type="number" name="rank" min="1" max="500">
            
            <label class="deco" for="valeur"> Valeur  </label>
            <input  class="style valeur" type="text" name="valeur" id="valeur" required>

			<label class="deco" for="avg_spec">Spectators Average </label>
			<input class="style spectator" type="number" name="avg_spec" id="avg_spec" max="3000000" required>

			<label class="deco " for="cup"> CUP </label>
			<input  class="style cup" type="text" name="cup" id="cup" required>
			
			<div class="file_input">
					<input  class="inputfile" type="file" name="imgclub" id="file"  />
					<label id="hover_btn" for="file">Choose an image</label>
			</div>

			<div class= save>
	                <input class="btn_save" type="submit" name="save" value= "save" id="disp_button">
	        </div> 

		</form>
		</div>
</body>   
</html> 
