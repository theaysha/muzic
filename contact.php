<?php
    $con = mysqli_connect('localhost','root','','muzic');
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        $qr = mysqli_query($con,"insert into contact (name, email, subject,message) values ('$name','$email','$subject','$msg')");

        if($qr){
            echo "<script>alert('Thanks for contact us')</script>";
        }else{
            echo "<script>alert('Something Went Worng')</script>";            
        }
    }
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
            <a href="index.php">Home</a>
            <a href="#">Podcast</a>                                
            <a href="">Pages</a>
            <a href="">About</a>
            <a href="" class="aysha">Contact</a>
            <h4></h4>
            <i class='bx bx-user-circle' id="user"></i>
            <!-- <i class='bx bxs-download'></i> -->
        </nav>
        <i class='bx bx-menu' id="menu_icon"></i>
    </header>
    <section class="contact">
        <h1>Contact</h1>
        <div class="form_container">
            <div class="form">
                <form action="" method="POST">
                    <div class="first">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="msg" id="" cols="50" rows="10" placeholder="Your Message"></textarea>
                    <input type="submit" name="sub">
                </form>
            </div>
            <div class="contact_container">
                <h1>INFO</h1>
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit necessitatib</h3>
                <h2>8 8000 854 854</h2>
                <h4>aysha@habib.com</h4>
                <h5>xyz, yyyzzxx, yyy,zzzz</h5>
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