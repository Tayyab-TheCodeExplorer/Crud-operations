<?php 
 $con = mysqli_connect("localhost", "root", "", "user_db") or die("connection failed");

if(isset($_GET['delid']))
{
    $getid = $_GET['delid'];
$sql = "DELETE FROM `form_inf` WHERE $getid = `id`";    
if (mysqli_query($con,$sql)) {
    header('location:show.php');
}
}

?>