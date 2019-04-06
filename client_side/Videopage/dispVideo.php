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


  <script>
    $(document).ready(function(){
      $("img").click(function(){
        var vid = $(this).attr("alt");
        // alert(vid);
        $("source").attr("src" , vid );
        // $("#div1").load(vid);
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
                <h2>testttt</h2>
                <video height="500vm" controls="">
                  <source src="1.mp4" type="video/mp4">
                </video>
            </div>
                                           
        <div class="videoList">
 
        <div class="slider_video">
            <h2>11111111</h2>
            <a href="#">
            <img class="miniature" src="1.png" alt="1.mp4"></a>
        </div>

     
        <div class="slider_video">
            <h2>2222222</h2>
            <a href="#">
            <img class="miniature" src="2.png"  alt="2.mp4"></a>
        </div>

          <div class="slider_video">
            <h2>3333333</h2>
            <a href="#">
            <img class="miniature" src="1.png" alt="3.mp4" ></a>
        </div>

     
        <div class="slider_video">
            <h2>44444444</h2>
            <a href="#">
            <img class="miniature" src="2.png" alt="4.mp4"></a>
        </div>

          <div class="slider_video">
            <h2>5555555</h2>
            <a href="#">
            <img class="miniature" src="1.png" alt="5.mp4"></a>
        </div>

     
        <div class="slider_video">
            <h2>66666666</h2>
            <a href="#">
            <img class="miniature" src="2.png"></a>
        </div>

          <div class="slider_video">
            <a href="#">
            <img class="miniature" src="1.png"></a>
        </div>

     
        <div class="slider_video">
            <a href="#">
            <img class="miniature" src="2.png"></a>
        </div>

          <div class="slider_video">
            <a href="#">
            <img class="miniature" src="1.png"></a>
        </div>

     
        <div class="slider_video">
            <a href="#">
            <img class="miniature" src="2.png"></a>
        </div>

          <div class="slider_video">
            <a href="#">
            <img class="miniature" src="1.png"></a>
        </div>

     
        <div class="slider_video">
            <a href="#">
            <img class="miniature" src="2.png"></a>
        </div>

          <div class="slider_video">
            <a href="#">
            <img class="miniature" src="1.png"></a>
        </div>

     
        <div class="slider_video">
            <a href="#">
            <img class="miniature" src="2.png"></a>
        </div>

          <div class="slider_video">
            <a href="#">
            <img class="miniature" src="1.png"></a>
        </div>

     
        <div class="slider_video">
            <a href="#">
            <img class="miniature" src="2.png"></a>
        </div>

          <div class="slider_video">
            <a href="#">
            <img class="miniature" src="1.png"></a>
        </div>

     
        <div class="slider_video">
            <a href="#">
            <img class="miniature" src="2.png"></a>
        </div>



        
        </div>
        </div>
    </div>

</body> 
</html>       