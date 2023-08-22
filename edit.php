<?php

$emailerror = "";
$passerror = "";
$submited = "";
$img = "";

$con = mysqli_connect("localhost", "root", "", "user_db") or die("connection failed");


if (isset($_GET['edid'])) {
    $id = $_GET['edid'];
    // echo $id;

    $sql = "SELECT * FROM `form_inf` where `id`=$id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        print_r($data) ;
        $id = $data['id'];
        $email = $data['email'];
        $password = $data['password'];

    }
};


if (isset($_POST['submit'])) {
    print_r($_POST);
    $u_id = $_POST['id'];
    $u_email = $_POST['email'];
    $u_pass = md5($_POST['pass']);

    if (empty($u_email)) {
        $email = "";
        $password = "";
        $emailerror = "please Enter Your Email....";
    } elseif (empty($u_pass)) {
        $password = "";
        $email = "";
        $passerror = "Please Enter Your Password...";
    } elseif ($_FILES['img']['error'] != 0) {
        $password = "";
        $email = "";
        $img = "select image.....";
    } else {
        $img_name = $_FILES['img']['name'];
        $img_tmp_name = $_FILES['img']['tmp_name'];
        $new_name = rand(1000, 9999999999) . "kdjf" . microtime() . $img_name;
        $save_img = "./images/" . $new_name;
        move_uploaded_file($img_tmp_name, $save_img);
        
        $update_q = "UPDATE `form_inf` SET `email`='$u_email', `password`='$u_pass', `image`='$save_img' WHERE `id`=$u_id";
        $u_insert = mysqli_query($con,$update_q);
        if ($u_insert) {
            header("location:show.php");
        }
        
    }
};

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>



    <div class="container">
        <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="X">
    <h1>
    <input type="text" value="<?php echo $id ?>">

    </h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" value="<?php echo $email ?>" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <p><?php echo $emailerror ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" value="<?php echo $password ?>" class="form-control" name="pass" id="exampleInputPassword1">
                <p><?php echo $passerror ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Choose Your Image.</label>
                <input type="file" class="form-control" name="img" id="exampleInputPassword1">
                <p><?php echo $img ?></p>
            </div>
                <input type="submit" name="submit" value="Update">
            <!-- <button type="submit" name="update" class="btn btn-primary"></button> -->
            <p><?php echo $submited ?></p>
        </form>
    </div>










    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>