<?php 
include "config.php";

if(isset($_POST["save"])){
	$VideoTitel=$_POST['VideoTitel'];
	$VideoDescr=$_POST['VideoDescr'];
	$insertion = "INSERT INTO videos (title , description , vidName , datePUB) 
	VALUES (:VideoTitel , :VideoDescr , :vidName , Now() )" ;

	$stmt = $connexion->prepare($insertion);
	$stmt-> bindParam(':VideoTitel', $VideoTitel );
	$stmt-> bindParam(':VideoDescr', $VideoDescr );
	$stmt-> bindParam(':vidName', $vidName );
	$stmt -> execute();
// move the video to the folder 
	$last_id = $connexion->lastInsertId();
	$vidName = $last_id .'.mp4' ;
	$chemin = 'videos/'.$vidName;
	
	$vid = $_FILES['video']['tmp_name'];
	move_uploaded_file($vid, $chemin );

// generate a thumbnail for the slide video using ffmpeg
	$ffmpeg = '\ffmpeg\bin\ffmpeg';   
	$video = $chemin;   
	$image = '..\..\..\HomePage\video_thumbnail/'.$last_id.'.jpg';    
	$interval = 2;    
	$size = '640x480';    
	$cmd = "$ffmpeg -i $video -deinterlace -an -ss $interval -f mjpeg -t 1 -r 1 -y -s $size $image 2>&1";
	exec($cmd);       
}	   
$select= $connexion->query('SELECT * FROM videos ORDER BY ID DESC ') ;
?>


<!DOCTYPE html>
<html>
    <head>
        <title>video management</title>
        <meta charset='utf-8'>
        <link rel="stylesheet"  href="\my_projet\space_admin\space_admin_css\video_managment_css\video.css">
        <link rel="stylesheet"  href="\my_projet\space_admin\space_admin_css\video_managment_css\video_grid.css">
    </head>
<body>
	<div class="container">
					<div class="return">
					<a class="back" href="\my_projet\space_admin\space_admin_php\article_managment\admin_space.html">Return To Admin Space</a>
				</div>
			<form class="VideoInfo" method="POST" enctype="multipart/form-data">	
				<textarea class="VideoTitel" type="text" name="VideoTitel" placeholder="Title"></textarea>
				<textarea class="VideoDescr" type="text" name="VideoDescr" placeholder="Write some words about this video"></textarea>	
				<div class="file_input">
					<input  class="inputfile" type="file" name="video" id="file"  />		
					<label id="hover_btn" for="file">Choose a video</label>
					<!-- <input  class="inputfile" type="file" name="image" id="file"  />		
					<label id="hover_btn" for="file">Choose a thumbnail</label>	 -->			
				</div>
				<div class= save_video>
			        <input class="btn_save" type="submit" name="save" value= "save" id="disp_button">        
			    </div>
			    
			</form>
			<div>
				<?php while($row = $select-> fetch()){
								  // add each row returned into an array
									  $tit = $row['title'];
									  $descr = $row['description'];
									  $idVid = $row["ID"].".mp4";
									  ?>
			<div class="vidlist">						  
				<h1  ><?php echo $tit ?> </h1>
				<div class="VideoShow">
				<video  width="400px" height="200px" controls="">
					<source src=videos/<?php echo $idVid  ?> type="video/mp4"></video>
				</div>
				<div class="videscr">
				<p ><?php echo $descr ?></p>
				</div>
				<hr>
			</div>
		<?php } ?>
		</div>
	</div>
	
	

</body>