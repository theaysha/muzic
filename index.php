<?php
    session_start();
    $con = mysqli_connect('localhost','root','','muzic');
    $query = mysqli_query($con, "select * from song");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/design.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
</head>
<body> 
    <header>
        <h1>SOUNDCAST</h1>
        <nav>
            <a href="#" class="aysha">Home</a>
            <a href="podcast.php">Podcast</a>                                
            <a href="">Pages</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <h4><?php echo $_SESSION['name'];?></h4>
            <div>
                <a href="login.php"><i class='bx bx-user-circle' id="user"></i></a>
            </div>
            <!-- <i class='bx bxs-download'></i> -->
        </nav>
        <i class='bx bx-menu' id="menu_icon"></i>
    </header>
    <main>
        <section id="home">
            <div class="container">
                <h1 class="H1">EPISODE #08 - OUR VACATION</h1>
                <div class="content">
                    <h3>LIFESTYLE //</h3>

                        <h3 id="min_duration"> 45 MIN</h3>
                </div>
            </div>
            <div class="player">
              <button class="circle">  <i class='bx bx-play-circle' id="player_btn"></i></button>
                <label for="" id="runtime">00:00</label>
                <input type="range" name="" id="play" value="0" min="0" max="100">
                <label for="" id="main_duration">00:00</label>
                <i class='bx bx-volume-full'></i>
                <input type="range" name="" id="volume" min="0" max="100">  
            </div>
        </section>
        <section>
                <div class="cards">
                <?php
                while($exe = mysqli_fetch_array($query)){
            ?>
                    <div class="card_item">
                        <img src="upload/<?php echo $exe["imagefilename"]?>">
                        <div class="card_content">
                            <h3>December 21, 2015</h3>
                            <h1><?php echo $exe["musicname"]?></h1>
                            <p><?php echo $exe["lyrics"]?></p>
                            <div class="content">
                                <h3><?php echo $exe["singername"]?> //</h3>
                                    <!-- <h3 class="duration">45 min //</h3> -->
                                <!-- <i class='bx bx-play-circle'></i> -->
                                <h3>PLAY</h3>
                                <button class="abcd" value="<?php echo $exe["musicname"]?>"><i class='bx bx-play-circle' id="<?php echo $exe["id"]?>"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                
                        
                   
                    
                </div>
            </div>
        </section>
        <section>
            <div class="about">
                <h1>Never Miss An Episode</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam praesentium quae laboriosam rerum dicta! Vero neque quam consequatur unde cupiditate dolorum quod, blanditiis, facilis eius hic incidunt, quasi reiciendis tenetur.</p>
                <div class="mail">
                    <form action="">
                        <input type="email" placeholder="Your email"/>
                        <button><i class='bx bxl-telegram'></i></button>
                    </form>
                </div>
            </div>
        </section>
    </main> 
    <footer>
        <div class="main">
        <div class= "ab1">
            <h1>SITEMAP</h1>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">PODCAST</a></li>
                    <li><a href="">PAGES</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="contact.php">CONTACTS</a></li>
                </ul>   
        </div>
        <div class="div1">
            <h1 class="ab2">
                LASTEST EPISODES
            </h1>
            <br> <br>
            <h5>
                #08-OUR VACATIONS HAVE <BR>BEEN SO AMAZING</BR>

            </h5>
            <h6>
                DECEMBER 22,2015
            </h6> <br>

            <h5>
                #07- PODCAST EMBED FROM <BR>SOUNDCLOUD</BR>

            </h5>
            <h6>
                DECEMBER 21,2015
            </h6>


        </div>
        <div class="div2">
            <h1 class="ab3">
                WHO IS HELPING?
            </h1>
            <br> <br>
            <h5>
                @REIDARKING</BR>

            </h5>
            <h6 class="for">
                Donation-U$ 10
            </h6> <br>

            <h5>
                @REIDARKING</BR>
            

            </h5>
            <h6 class="for">
                Donation-U$ 5
            </h6> <br>

            <h5>
                @REIDARKING</BR>
            

            </h5>
            <h6 class="for">
                Donation-U$ 50
            </h6>


        </div>
        <div class="div3">
            <h1 class="ab4">
                WE ARE SOCIAL
            </h1> <br>
            <a href="https://www.facebook.com/yourprofile" target="_blank">
            <i class='bx bxl-facebook go'></i>
            </a>
            <a href="https://www.twitter.com/yourprofile" target="_blank">

              <i class='bx bxl-twitter go'></i>
            </a>
            <a href="https://www.instagram.com/accounts/login/"> 


               <i class='bx bxl-instagram-alt go' ></i>
            </a>
            <a href="https://accounts.google.com" target="_blank">


              <i class='bx bxl-google-plus go'></i> <br>
            </a>
        
            <a href="#">

              <i class='bx bxs-cloud go'></i> 
            </a>
        

              <a href="#">

                <i class='bx bxl-pinterest go'></i>
              </a>
            
                <a href="#">
                <i class='bx bxl-youtube go'></i>
            </a>
            
            <a href="https://accounts.spotify.com/authorize">

                 <i class='bx bxl-spotify go'></i>
            </a>
        </div>
        </div>
        

    </footer> 
    <button id="music_player">Music</button>
    <div class="mini_player">
        <h1 id="wname"></h1>
        <input type="range">
        <div class="control">
            <i class='bx bx-skip-previous' id="prev"></i>
            <!-- <i class='bx bx-play-circle' ></i> -->
            <button class="triangle">  <i class='bx bx-play-circle' id="music_btn"></i></button>
            <i class='bx bx-skip-next' id="next"></i>
        </div>
    </div>
    <script src="js/main.js"></script>
</body> 
</html>         