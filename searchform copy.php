<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Search Info</title>
    <link rel="shortcut icon" href="css/img/fa.jpg" type="image/x-icon">

    <style>
        body {
            background-color: #3FBB93;
        }

        input {
            width: 40%;
            height:5%;
            boder :1px;
            border-radius:05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px gray;

        }
    </style>


</head>
<body>
    <center>
    <h1>Search Data from Database </h1>
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Enter ID To Search"> <br>
            <input type="submit" name="search" value="Search Data">


        </form>

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

                <form  action="" method="POST">

                    <input type="hidden" name="id" value="<?php echo $row ['id']?>"/> <br>
                    <input type="text" name="fname" value="<?php echo $row ['fname']?>"/><br>
                    <input type="text" name="lname" value="<?php echo $row ['lname']?>"/><br>
                    <input type="email" name="email_address" value="<?php echo $row ['email_address']?>"/><br>
                    <input type="text" name="Message" value="<?php echo $row ['Message']?>"/><br>
                    <input img type="text" name="ppic" value="<?php echo $row ['ppic']?>"/>


                </form>
         <?php


        }
    }  

?>   
    
    
    
    
    </center>
</body>
</html>