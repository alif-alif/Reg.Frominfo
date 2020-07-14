<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Edit Data</title>

    <link rel="shortcut icon" href="css/img/fa.jpg" type="image/x-icon">
    <!--Google fonts-->

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/edit.css">
</head>
<body>

<?php

require_once ("connect.php");

if ($connect == true) {
    echo "connected";
}

if (isset ($_REQUEST ["edit_id"])) {

    $editID = $_REQUEST["edit_id"];



$selectinfo = "SELECT * FROM my_users WHERE id=$editID";
$runInfo = mysqli_query ($connect,$selectinfo);

while ($getDate = mysqli_fetch_array($runInfo)){
    
    ?>

<br> <br>
<br> <br>
<br> <br>
<br> <br>
<br> <br>
<br> <br>

<div class="form-section clearfix form" >
        
        <form action="editdata_core.php" method="POST">
            <div class="form-design ">
                <h2> Get in touch</h2> <br>

                <label  for="fname" class="label">First Name</label> <br>
                <input type="text" name="fname" value ="<?php echo $getDate["fname"];?>" class="input" placeholder="Type your First name"><br><br><br>
            </div>

            <div class="form-design ">
                <label  for="lname" class="label">Last Name</label> <br> 
                <input type="text" name="lname"  value ="<?php echo $getDate["lname"];?>"" class="input" placeholder="Type your First name"><br><br>
            </div>

            <div class="form-design ">
                <label for="email_address" class="label">Contact Email*</label> <br>
                <input type="email" name="email_address" value ="<?php echo $getDate["email_address"];?>" class="input" placeholder="abc@email.com" required><br><br>

            </div>
            
            <div class="form-design clearfix ">
            
                <textarea name="Message" id="new-mess" cols="30" rows="10" value ="" class="input" > <?php echo $getDate["Message"];?> </textarea>
            </div>


            <div class="form-design ">
                <label for="editingID" class="label">EditingID</label> <br>
                <input type="text" name="editingID" value ="<?php echo $editID;?>" class="input" >
			</div>


                <button type="submit"  name= "editButton" class="edit_Button">UPDATE</button>

                    <div class="side-img">
                        <img src="css/img/side.JPG" alt="">
                    </div>
            
        </form>
    </div>

 <?php 
 } 
    }
        ?>




    
</body>
</html>