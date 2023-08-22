<?php
$con = mysqli_connect("localhost", "root", "", "user_db");
$sql = "SELECT*FROM `form_inf`";
$dt = mysqli_query($con, $sql);

// print_r($dt);

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

        <table class="table">

            <thead>
                <?php if (mysqli_num_rows($dt)) {
                ?>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Image</th>
                        <th scope="col">Date</th>
                    </tr>

            </thead>
            <tbody>
                <?php
                    while ($data =  mysqli_fetch_assoc($dt)) {
                        print_r($data);
                ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['password'] ?></td>
                        <td><?php echo $data['image'] ?></td>
                        <td><?php echo $data['date'] ?></td>
                        <td>
                        <button type="button" class="btn btn-outline-info"><a href="./edit.php?edid=<?php echo $data['id']?>">Edit</a></button>
                        <button type="button" class="btn btn-outline-danger"><a href="./delete.php?delid=<?php echo $data['id']?>">Delete</a></button>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>










    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>