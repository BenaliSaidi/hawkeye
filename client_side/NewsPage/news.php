<?php
include '../HomePage/config_db.php';
$select =  $connexion->query("SELECT * FROM news ORDER BY ID DESC")
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hawkeye</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="news.css">
        <link rel="stylesheet" href="news_grid.css">
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
                <li id = "SCORE"><a href="#"> <i class="fas fa-trophy"></i><b>LEAGUE</b></a></li>
                <li id = "ATHLETE"><a href="/my_projet/client_side/AthletePage/player.php"> <i class="fas fa-skiing"></i><b>ATHLETE</b></a></li>
            </ul>
        </div>
        <div>
            <h1>ALL NEWS</h1>
        </div>
        <?php
        while ($row = $select->fetch()) {
              $title = $row['title'];
              $para = $row['paragraphe'];
              $idimg = $row['id']; 
              $text_head = implode(' ', array_slice(str_word_count($para, 2), 0, 30));
             ?>
        <div class="all_news">
            <a href="Article.php?id=<?= $row['id'] ?>">
            <img src=..\..\space_admin\space_admin_php\article_managment\miniature\<?php echo $idimg.".jpg" ?> >
            <h2> <?php echo $title  ?> </h2>
            <p class="clear"> <?php echo $text_head."  ..."  ?> </p></a>
        </div>
        <?php } ?>
         <div class="footer">
            <div class="footer_menu FT" >
                <h3>HawkEye</h3>
                <ul> 
                    <li><a href="/my_projet/client_side/HomePage/home.php"> HOME </a></li>
                    <li><a href="/my_projet/client_side/NewsPage/news.php"> NEWS </a></li>
                    <li><a href="#"> LEAGUE </a></li>
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
    </div>
</body>
</html>