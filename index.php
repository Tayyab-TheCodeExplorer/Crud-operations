<?php
include("./connect_db/a.php");

$nameerror = "";
$passerror = "";
$emailerror = "";
$imgerror = "";
$submiterror = "";


if (isset($_POST['submit'])) {

    print_r($_FILES['img']['tmp_name']);
    // print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // echo $name . $email . $pass;
    if (empty($name)) {
        $nameerror = "Please Enter Your Name";
    } elseif (empty($email)) {
        $emailerror = "Please Enter Your Email";
    } elseif (empty($pass)) {
        $passerror = "Please Enter Your Password";
    } elseif ($_FILES['img']['error'] != 0) {
        $imgerror = "Please Select Your Image";
    } else {
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $exp = explode(".", $img_name);
        $ext = strtolower(end($exp));
        // echo $img_name . $tmp_name . $exp . $ext;
        $allowed_ext = ["jpg", "jpeg", "png", "gif", "bmp", "tiff", "webp", "svg", "ico", "heic", "heif", "raw", "cr2", "nef", "arw", "dng", "raf", "rw2", "orw", "sr2", "svgz"];

        if (in_array($ext, $allowed_ext)) {
            $new_name = rand(999999, 999999999999) . $img_name . microtime();
            $move_to = "./images/" . $new_name;
            if (move_uploaded_file($tmp_name, $move_to)) {
                $sql = "INSERT INTO `login_tb`(`name`, `email`, `password`, `image`) VALUES ('{$name}','{$email}','{$pass}','{$move_to}')";
                // print_r($sql);
                if(mysqli_query($con, $sql)){
                    $query ="SELECT * FROM `login_tb`  where `email` = '{$email}' and `password` = '{$pass}'";
                    $data = mysqli_query($con,$query);
                $res = mysqli_fetch_assoc($data);
                // $success = print_r($res);
                session_start();
                $_SESSION['name']=$res['name'];
                $_SESSION['email']=$res['email'];
                $_SESSION['pass']=$res['passsword'];
                $_SESSION['img']=$res['image'];

                    header("location: dashboard.php");
                }
                
            }
        } else {
            $imgerror = "Invalid Image";
        }
    }
}

