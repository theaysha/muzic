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
</body>
</html>