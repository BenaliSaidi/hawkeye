<?php 

include "../HomePage/config_db.php" ;

$select= $connexion->query('SELECT * FROM videos ORDER BY ID DESC ') ;
         ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hawkeye</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="dispVideo_grid.css">
        <link rel="stylesheet" href="dispVideo.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">  
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
          $(".slider_video").click(function(){
            var vid = $(this).find("img").attr("alt");
            var tit = $(this).find("h2");

            $("#title").replaceWith(tit);
            $("#vid").get(0).pause();
            $("#loadVideo").attr('src', vid);
            $("#vid").get(0).load();

            
          });
          
        });
        </script>

	</head>
<body>
    <div class="container" >
    	<div class="menu_profil">
            <ul class="menu identification">
                <li class = "Login"><a href="#"> <i class="fas fa-sign-in-alt"></i><b>Sign in</b></a></li>
                <li class = "Register"><a href="#"> <i class="fas fa-user-plus"></i><b>Sign up</b></a></li>
            </ul>
        </div>
        <div class="menu_option">
            <ul class="menu option_list">
                <li id = "HOME"><a href="\my_projet\client_side\HomePage\home.php"> <i class="fas fa-home"> </i> <b>HOME </b></a></li>
                <li id = "NEWS"><a href="\my_projet\client_side\NewsPage\news.php"> <i class="fas fa-newspaper"></i><b>NEWS</b></a></li>
                <li id = "SCORE"><a href="#"><i class="fas fa-trophy"></i><b>LEAGUE</b></a></li>
                <li id = "ATHLETE"><a href="/my_projet/client_side/AthletePage/player.php"> <i class="fas fa-skiing"></i><b>ATHLETE</b></a></li>
            </ul>
        </div>

        <div class="videos">

            <div class="playVideo">
                <h2 id="title"></h2>
                <video id="vid" height="500vm" controls="">
                  <source id="loadVideo" src='' type="video/mp4">
                </video>
                <p></p>
            </div>
                                           
        <div class="videoList">
        <?php while ($row = $select->fetch()) {
            $title = $row['title'];
            $imgName = $row['imgName'];
            $vidName = $row['vidName'];
            $pathToVid = '../../space_admin\space_admin_php\video_managment_php\videos/'.$vidName ?>

            <div class="slider_video">
                <h2 id="tit"> <?php echo $title  ?> </h2>
                <img class="miniature" src="../HomePage\video_thumbnail/<?php echo $imgName ?>" alt=<?php echo $pathToVid  ?> >
            </div> 
     <?php   }  ?>
       
        </div>
        </div>
    </div>

</body> 
</html>       