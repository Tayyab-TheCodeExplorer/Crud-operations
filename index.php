<?php

$emailerror = "";
$passerror ="";
$submited = "";
$img = "";

print_r($_FILES);

$con = mysqli_connect("localhost", "root", "", "user_db") or die("connection failed");

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

if (empty($email)) {

$emailerror = "please Enter Your Email....";
}
elseif (empty($pass)) {
  $passerror = "Please Enter Your Password...";
}
elseif ($_FILES['img']['error']!=0) {
  $img = "select image.....";
  
}
else {
  $img_name = $_FILES['img']['name'];
  $img_tmp_name = $_FILES['img']['tmp_name'];
  $end = explode('.', $img_name);
  $ext = strtolower(end($end));
  $allowed_ext = ['jpg','jpeg','png'];
  if (in_array($ext,$allowed_ext)) {
    $new_name = rand(1000 , 9999999999)."kdjf".microtime().$img_name;
    $save_img = "./images/".$new_name;
    if(move_uploaded_file($img_tmp_name,$save_img)){
$sql = "INSERT INTO `form_inf`(`email`, `password`, `image`) VALUES ('{$email}','{$pass}','{$save_img}')";
if(mysqli_query($con,$sql)){
  header('location:show.php');

};

    }
  }
  else {
    $img = "invalid image";
  }
  
};

    

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
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <p><?php echo $emailerror ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
    <p><?php echo $passerror ?></p>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Choose Your Image.</label>
    <input type="file" class="form-control" name="img" id="exampleInputPassword1">
    <p><?php echo $img ?></p>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <p><?php echo $submited ?></p>
</form>
</div>










<script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>