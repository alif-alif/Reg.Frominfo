<?php
require_once ("connect.php");

if ($connect == true) 

{

    echo "connected";
}


if (isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset ($_REQUEST["email_address"]) && isset($_REQUEST["Message"]))

{

    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email_address = $_REQUEST["email_address"];
    $Message = $_REQUEST["Message"];

    $image = $_FILES["ppic"]["name"];
    $image_tmpNme= $_FILES["ppic"]["tmp_name"];
    $location = "images/";
    $nameForDB = uniqid();

    move_uploaded_file ($image_tmpNme, $location."$nameForDB.jpg");
   
    $insertQuery = "INSERT INTO my_users (fname,lname,email_address,Message,ppic) VALUES ('$fname','$lname','$email_address','$Message','$nameForDB.jpg')";
    $runQuery == mysqli_query ($connect,$insertQuery);

    if ($runQuery ==  true) 
    {
       
        header ("location: index.php?action = true");

    } else 
    
    {
        
        header ("location: index.php?action = false");
    }
    
}


?>


$insertQuery = "INSERT INTO my_uewreg (Full-Name,Email,Password,Retype-Password) VALUES ('$Full-Name','$Email','$Password' '$Retype-Password' )";

register.php?action

$insertQuery = "INSERT INTO my_uewreg (Full-Name,Email,Password,Retype-Password) VALUES ('$Full-Name','$Email','$Password' '$Retype-Password' )";
   