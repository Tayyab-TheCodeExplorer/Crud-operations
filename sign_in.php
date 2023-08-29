<?php

include("./connect_db/a.php");

$emailerror = "";
$passerror = "";
$success = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (empty($email)) {
        $emailerror = "Please Enter Your Email";
    } elseif (empty($pass)) {
        $passerror = "Please Enter Your Password";
    } else {
        $sql = "SELECT * FROM `login_tb` where `email` = '{$email}' and `password` = '{$pass}'";
        if ($data = mysqli_query($con, $sql)) {
            $res =  mysqli_fetch_assoc($data);
            // $success = print_r($res);
            // echo $res['email'];
            session_start();
            $_SESSION['name'] = $res['name'];
            $_SESSION['email'] = $res['email'];
            $_SESSION['pass'] = $res['passsword'];
            $_SESSION['img'] = $res['image'];

            header("location: dashboard.php");
        } else {
            $success = "Please input valid email or password";
        }
    }
}







