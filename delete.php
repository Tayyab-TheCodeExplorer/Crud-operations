<?php

use LDAP\Result;

include("./connect_db/a.php");

if(isset($_GET["delid"])){
    $id = $_GET["delid"];
    $query ="SELECT * FROM `login_tb` WHERE `id`=$id";
     $select = mysqli_query($con, $query);
     $data =  mysqli_fetch_assoc($select);



    $sql = "DELETE FROM `login_tb` WHERE `id`=$id";
    if( mysqli_query($con, $sql)){
        unlink($data['image']);
        header("location: dashboard.php");

    }
}




?>