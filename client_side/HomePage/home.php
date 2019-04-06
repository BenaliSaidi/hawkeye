<?php 
include "select.php" ;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hawkeye</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="home_grid.css">
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
            <div class="Title">
                <p>Read First</p>
            </div>
                <div class="slide">

                <?php
                $row = $select_10-> fetch(); 
                    $idd =  $row['id'].".jpg";  
                ?>
                    <a href="#"><p><?php echo $row['title'] ?></p></a>
                    <img src=..\..\space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>> 
                    <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>      
                </div> 

                 <div class="slide">

                <?php
                $row = $select_11-> fetch();
                    $idd =  $row['id'].".jpg";  
                ?>
                    <a href="#"><p><?php echo $row['title'] ?></p></a>
                    <img src=..\..\space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>> 
                    <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>      
                </div> 

                 <div class="slide">

                <?php
                $row = $select_12-> fetch(); 
                    $idd =  $row['id'].".jpg";  
                ?>
                    <a href="#"><p><?php echo $row['title'] ?></p></a>
                    <img src=..\..\space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>> 
                    <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>      
                </div> 

                 <div class="slide">

                <?php
                $row = $select_13-> fetch(); 
                    $idd =  $row['id'].".jpg";  
                ?>
                    <a href="#"><p><?php echo $row['title'] ?></p></a>
                    <img src=..\..\space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>> 
                    <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>      
                </div> 

                 <div class="slide">

                <?php
                $row = $select_14-> fetch(); 
                    $idd =  $row['id'].".jpg";  
                ?>
                    <a href="#"><p><?php echo $row['title'] ?></p></a>
                    <img src=..\..\space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>> 
                    <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>      
                </div> 


        <div class="news">
            <div class="A news_section">       
               <?php 
                $row = $select_1-> fetch() ; 
                $idd =  $row['id'].".jpg"; ?>
                <img class="medium-ph" src=../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>

                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
                <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>  
            <div class="B news_section">
                <a href="#">
                <img class="small-ph" src="picture/Clasico FC Barcelona vs Real Madrid.jpg" >
                <h1> Match Today </h1 ></a>     
            </div>
            <div class="C news_section">     
                <?php 
                $row = $select_2-> fetch() ; 
                $idd =  $row['id'].".jpg"; ?>
                <img class="medium-ph" src=../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>
                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
                <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>
            <div class="D news_section">
                <?php 
                $row = $select_3-> fetch() ;  
                $idd =  $row['id'].".jpg";  ?>               
                <img  class="medium-ph" src= ../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>
                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
                <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>
            <div class="E news_section">
                <?php 
                $row = $select_4-> fetch()  ;
                $idd =  $row['id'].".jpg";  ?>               
                <img  class="medium-ph" src= ../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>
                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
                <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>
            <div class="F news_section">
                <?php 
                $row = $select_5-> fetch();  
                $idd =  $row['id'].".jpg";  ?>               
                <img  class="medium-ph" src= ../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>
                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
                <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>  
            <div class="H news_section">
                <?php 
                $row = $select_6-> fetch();  
                $idd =  $row['id'].".jpg";  ?>               
                <img  class="medium-ph" src= ../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>
                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
               <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>
            <div  class="I news_section">
                <?php 
                $row = $select_7-> fetch();  
                $idd =  $row['id'].".jpg";  ?>               
                <img  class="medium-ph" src= ../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>
                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
               <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>
            <div class="J news_section">
                <?php 
                $row = $select_8-> fetch();  
                $idd =  $row['id'].".jpg";  ?>               
                <img  class="medium-ph" src= ../../space_admin\space_admin_php\article_managment\miniature/<?php echo $idd ?>>
                <a href="#"><h3><?php echo $row['title'] ?></h3></a>
                <?php $text =  $row['paragraphe'] ;
                $text_head = implode(' ', array_slice(str_word_count($text, 2), 0, 30));
                 ?>
                <p><?php echo $text_head ?></p>
            </div>
            <div class="pass">
                <a id="First_page" href="#">First page</a>
                <a id="Next" href="#"><i class="fas fa-chevron-circle-right"></i></a>
                <a id="Previous" href="#"><i class="fas fa-chevron-circle-left"></i></a>
                <a id="Last_page" href="#">Last page</a>
            </div>
        </div>

        <div class="slider_video">

            <figure>
               <?php while($row = $select_15-> fetch()){
                                      $thvid = $row['ID']; ?>
                <div class="slide_video"> 
                    <a href="#"><div><i class="fas fa-play-circle"></i> </div>
                    <img class="miniature" src=video_thumbnail\<?php echo $thvid.".jpg" ?>></a>
                </div>
          <?php } ?>
            </figure>
        </div>

        <div class="more_vid">
                <a href="#">More video...</a>
        </div>

        <div class="footer">
            <div class="footer_menu FT" >
                <h3>HawkEye</h3>
                <ul> 
                    <li><a href="/my_projet/client_side/HomePage/home.php">  HOME </a></li>
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


    
    <script type="text/javascript">
 var slideIndex = 0;
 var slides = document.getElementsByClassName("slide");

showSlides();
function showSlides() {    
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";      
    }
    slideIndex++;
    if (slideIndex> slides.length) {
        slideIndex = 1} 
    slides[slideIndex-1].style.display = "grid"; 
   setTimeout(showSlides, 5000); // Change image every 5 seconds    
}

function currentSlide(no) {
    var i;    
    for (i = 0; i < slides.length; i++) {
        
        slides[i].style.display = "none"; 
    }
    slideIndex = no;
    slides[no-1].style.display = "grid";
}

function plusSlides(n) {
  var newslideIndex = slideIndex + n;
  if(newslideIndex < 6 && newslideIndex > 0){
     currentSlide(newslideIndex);
  }
}


  </script>
</body>	
</html>