<?php

require_once ("connect.php");

$getID = $_REQUEST ["id"];

$dltquery = "DELETE FROM my_users WHERE id = $getID ";

$runDlquery = mysqli_query ($connect, $dltquery);

if($runDlquery == true) {

    header("location: data_table.php?deleted");
}



?>