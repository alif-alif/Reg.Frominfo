<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Info</title>
    <link rel="shortcut icon" href="css/img/fa.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/searchform.css">


</head>
<body>
    <center>
        <div class="searchform">
            <h1>Search Data from Database </h1>
            <form action="" method="POST">
            <input type="text" name="id" placeholder="Enter ID To Search"> <br> <br>
            <input type="submit" id="search" name="search" value="Search Data"> <br> <br>
            <ul>
                <li><a href="http://localhost/alif/">home</a></li>
            </ul>
            </form>

           
           
        </div>

    <?php

    require_once ("connect.php");

    if (isset($_POST['search']))
    {

        $id = $_POST['id'];

        $query = "SELECT * FROM my_users where id='$id' ";
        $query_run = mysqli_query ($connect,$query);

        while ($row = mysqli_fetch_array ($query_run))
        {


            ?> 

            <br> <br>
            <br> <br>
            <br> <br>
            <br> <br>

            

            <div class="form-section clearfix form" >
        
            <form action="" method="POST">
                <div class="form-design ">
                    <h2> Get in touch</h2> <br>

                    <input type="hidden" name="id" value="<?php echo $row ['id']?>"/> 

                    <label  for="fname" class="label">First Name</label> <br>
                    <input type="text" name="fname" value="<?php echo $row ['fname']?>" class="input"><br>
                </div>

                <div class="form-design ">
                    <label  for="lname" class="label">Last Name</label> <br> 
                    <input type="text" name="lname"  value="<?php echo $row ['lname']?>"  class="input"><br>
                </div>

                <div class="form-design ">
                    <label for="email_address"  class="email"> Contact Email*</label> <br>
                    <input type="email" name="email_address" value="<?php echo $row ['email_address']?>"  class="input" ><br><br>
                </div>
                
                <div class="form-design clearfix ">
                
                    <textarea name="Message" id="new-mess" cols="30" rows="10" value ="" class="input" ><?php echo $row ['fname']?> </textarea>
                </div>


                <div class="form-design ">
                    <label for="ppic" class="label">pic.info</label> <br>
                    <input type="text" name="ppic" value="<?php echo $row ['ppic']?>"  class="input" >
                </div>

                <button type="submit"  name= "editButton" class="edit_Button">Back</button>

                    <div class="side-img">
                        <img src="css/img/side.JPG" alt="">
                    </div>


        </form>
    </div>

               
         <?php


        }
    }  

?>   
    
    
    
    
    </center>
</body>
</html>