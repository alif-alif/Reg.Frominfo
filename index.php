<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IF-edge">
    <title>Registration Form</title>

    <link rel="shortcut icon" href="css/img/fa.jpg" type="image/x-icon">
    <!--Google fonts-->

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


</head>
<body>

    <?php

    require_once ("connect.php");

    ?>


    <!-- Start Header Tag-->


    <header id="home">
        <nav class="sticky">
            <ul class="main-nav">

                <a href="">
                    <img src="css/img/logo.png" alt="logo" class="logo ">
                </a>

                <li><a href="#">Home</a></li>
                <li><a href="http://localhost/alif/data_table.php">Information</a></li>
                <li><a href="http://localhost/alif/searchform.php">Search Data</a></li>
                <li><a href="http://127.0.0.1:5500/contact.html">contact us</a></li>
                <li><a href="http://127.0.0.1:5500/blog.html">blog</a></li>
                    
            </ul>
        
          
        </nav>
    
        <div class="head-line">
            
            <h1>Please send an email to <br>
            contact@monoartmedia.com or fill the <br> form below</h1>

        </div>
    

    </header>

    <!--start form-->




    <div class="form-section clearfix" >
        
        <form enctype="multipart/form-data" action="savedata_core.php" method="POST">
            <div class="form-design">
                <h2> Get in touch</h2> <br>

                <label  for="fname" class="label">First Name</label> <br>
                <input type="text" name="fname" class="input" placeholder="Type your First name"><br>
            </div>

            <div class="form-design">
                <label  for="lname" class="label">Last Name</label> <br>
                <input type="text" name="lname" class="input" placeholder="Type your First name"><br>
            </div>

            <div class="form-design">
                <label for="email_address" class="label">Contact Email*</label> <br>
                <input type="email" name="email_address"  class="input" placeholder="abc@email.com" required><br>

            </div>
            
            <div class="form-design clearfix">
            
                <textarea name="Message" id="new-mess" cols="30" rows="10" class="input" placeholder="Message:" required></textarea>
            </div>

            <div class="form-design">
                <label for="ppic" class="label">Images</label> <br>
                <input type="file" name="ppic"  class="input"><br>

            </div>

                <button type="submit" id="click_btn" class="sub-button">SUBMIT</button>
                    <div class="side-img">
                        <img src="css/img/side.JPG" alt="">
                    </div>
            
        </form>
    </div>
       

 <!--End form-->


 <!-- Start Below img-->



    <div class="clearfix"></div>

        <div class="below-img " >
            <img src="css/img/below.JPG" alt="">
        </div>

 <!-- End Below img-->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="js/jquery-3.5.1.min.js"></script>
 <script src="js/main.js"></script>



    
    
</body>
</html>
