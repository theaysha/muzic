<?php
    session_start();
    $con = mysqli_connect('localhost','root','','muzic');
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
<body bgcolor="black">
<header>
        <h1>SOUNDCAST</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="podcast.php" class="aysha">Podcast</a>                                
            <a href="page.php">Pages</a>
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
    <section>
        <div class="cover">
        <div class="pic">
            <img class="pic3" src="background.jpg" alt="">
            
            <h3>December 21, 2015</h3>
            <h1>EPISODE #07 - PODCAST EMBED FROM SOUNDCLOUD</h1>
                        <p>This is a full card example, porro culpa minus ipsam a accusantium, cupiditate expedita accusamus, perspiciatis magni aliquid cumque facilis rerum eius. Ipsum facilis iste repudiandae ducimus accusamus...</p>


        </div>
        <div class="pic">
            <img class="pic3" src="background.jpg" alt="">
            
            <h3>December 21, 2015</h3>
            <h1>EPISODE #07 - PODCAST EMBED FROM SOUNDCLOUD</h1>
                        <p>This is a full card example, porro culpa minus ipsam a accusantium, cupiditate expedita accusamus, perspiciatis magni aliquid cumque facilis rerum eius. Ipsum facilis iste repudiandae ducimus accusamus...</p>


        </div><div class="pic">
            <img class="pic3" src="background.jpg" alt="">
            
            <h3>December 21, 2015</h3>
            <h1>EPISODE #07 - PODCAST EMBED FROM SOUNDCLOUD</h1>
                        <p>This is a full card example, porro culpa minus ipsam a accusantium, cupiditate expedita accusamus, perspiciatis magni aliquid cumque facilis rerum eius. Ipsum facilis iste repudiandae ducimus accusamus...</p>


        </div> 

    </div>
    </section> <br>
    <section>
        <div class="cover 1">
        <div class="pic1">
            <img class="pic3" src="background.jpg" alt="">
            
            <h3>December 21, 2015</h3>
            <h1>EPISODE #07 - PODCAST EMBED FROM SOUNDCLOUD</h1>
                        <p>This is a full card example, porro culpa minus ipsam a accusantium, cupiditate expedita accusamus, perspiciatis magni aliquid cumque facilis rerum eius. Ipsum facilis iste repudiandae ducimus accusamus...</p>


        </div>
        <div class="pic1">
            <img class="pic3" src="background.jpg" alt="">
            
            <h3>December 21, 2015</h3>
            <h1>EPISODE #07 - PODCAST EMBED FROM SOUNDCLOUD</h1>
                        <p>This is a full card example, porro culpa minus ipsam a accusantium, cupiditate expedita accusamus, perspiciatis magni aliquid cumque facilis rerum eius. Ipsum facilis iste repudiandae ducimus accusamus...</p>


        </div><div class="pic1">
            <img class="pic3" src="background.jpg" alt="">
            
            <h3>December 21, 2015</h3>
            <h1>EPISODE #07 - PODCAST EMBED FROM SOUNDCLOUD</h1>
                        <p>This is a full card example, porro culpa minus ipsam a accusantium, cupiditate expedita accusamus, perspiciatis magni aliquid cumque facilis rerum eius. Ipsum facilis iste repudiandae ducimus accusamus...</p>


        </div> 

    </div>
    </section>
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

</body>
</html>