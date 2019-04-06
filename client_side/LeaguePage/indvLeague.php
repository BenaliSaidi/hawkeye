<?php

include "../HomePage/select.php" ;
if(isset($_GET['idleague'])) {
   $get_id = htmlspecialchars($_GET['idleague']);
   $league = $connexion->prepare('SELECT * FROM clubs WHERE idleague = ?');
   $league->execute(array($get_id));   
} 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hawkeye</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="indvLeague-grid.css">
        <link rel="stylesheet" href="indvLeague.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">   
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
                <li id = "SCORE"><a href="my_projet/client_side/LeaguePage/SoccerLeague.php"> <i class="fas fa-trophy"></i><b>LEAGUE</b></a></li>
                <li id = "ATHLETE"><a href="/my_projet/client_side/AthletePage/player.php"> <i class="fas fa-skiing"></i><b>ATHLETE</b></a></li>
            </ul>
        </div>

            <h1 class="title">Clubs</h1>
           <?php 
           if($league->rowCount() >= 1) {
               while ($row = $league->fetch()) {

               $team = $row['team'];
               $rank = $row['rank'];
               $imgClub =$row['imgclub'];
               $avgspec = $row['avgspec'];
               $founded = $row['founded'];
               $cup = $row['cup'];
           ?>  
            <div class="club">
                <img class="img_club" src= "../../space_admin\space_admin_php\club_managment\image\<?php echo $imgClub ?>" >
                <p id="team"><b><?php echo $team ?></b> </p>
                <p id="rank">Rank : <?php echo $rank ?></p>
                <p id="founded">founded : <?php echo $founded ?></p>
                <p id="cup">cup : <?php echo $cup ?></p>
                <p id="average">average : <?php echo $avgspec ?></p>
                <a id="Rnews" href="">Related News</a>
                <a href="">TV broadcasting revenues</a>
            </div>

       <?php } } ?>

            <div class="footer">
            <div class="footer_menu FT" >
                <h3>HawkEye</h3>
                <ul> 
                    <li><a href="/my_projet/client_side/HomePage/home.php">  HOME </a></li>
                    <li><a href="/my_projet/client_side/NewsPage/news.php"> NEWS </a></li>
                    <li><a href="my_projet/client_side/LeaguePage/SoccerLeague.php"> LEAGUE </a></li>
                    <li><a href="/my_projet/client_side/AthletePage/player.php"> ATHLETE </a></li>
                </ul>
            </div>
            <div class="copyright FT">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Term of Service</a></li>
                </ul>
            </div>
             <div class="NewsLetter FT">
                <h3>NewsLetter</h3>
                <input type= "email"  id = "email" name= "mail"  >
                <input type="submit" id = "btn" name="btn" value="Send">
            </div>
             <div class="Follow FT">
                <h3>Follow us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">twitter</a></li>
                    <li><a href="#">instagram</a></li>
                    <li><a href="#">telegram</a></li>
                </ul>
            </div>
        </div>
</body>
</html>