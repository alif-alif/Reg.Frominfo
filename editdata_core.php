<?php

require_once ("connect.php");

if ($connect == true) {
    echo "connected";
}

if (isset($_REQUEST["editButton"])) {

    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email_address = $_REQUEST["email_address"];
    $Message = $_REQUEST["Message"];
    $editingID = $_REQUEST["editingID"];

    $upquery = "UPDATE my_users SET fname='$fname',lname='$lname',email_address='$email_address',Message='$Message' WHERE id=$editingID";

    $runquery = mysqli_query ($connect,$upquery);

    if ($runquery ==  true) {

        header("location: data_table.php?edited");
    }
    

}


?>