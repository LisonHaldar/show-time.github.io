<?php

include 'connection.php';

$id = $_GET['updateid'];

$qurry = "select * from `crud` where id = $id";
$result = mysqli_query($con, $qurry);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$email = $row['Email'];
$password = $row['Password'];
$mobile = $row['Mobile'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $qurry = "update crud set id = '$id', name = '$name', email = '$email', password = '$password', mobile = '$mobile'
    where id = $id";

    $result = mysqli_query($con, $qurry);

    if ($result) {
        // echo 'Data success inserted!';
        header('location: contact_database.php');
    } else {
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD database</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container m-5 bg-light p-3">
        <form acction="" method="POST">
            <div class="form-group mb-3">
                <label>Name</label>
                <input type="text" class="form-control my-3" autocomplete="off" placeholder="Enter your name" name="name" value= <?php echo $name; ?>>
            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control my-3" autocomplete="off" placeholder="Enter your email" name="email" value= <?php echo $email; ?>>
            </div>
            <div class="form-group mb-3">
                <label>Password</label>
                <input type="password" class="form-control my-3" autocomplete="off" placeholder="Enter your password" name="password" value= <?php echo $password; ?>>
            </div>
            <div class="form-group mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control my-3" autocomplete="off" placeholder="Enter your mobile Number" name="mobile" value= <?php echo $mobile; ?>>
            </div>

            <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
            <button type="submit" class="btn btn-primary my-3 d-right" name="submit"><a href="contact_database.php" class="text-light">Cancel</a></button>
        </form>
    </div>

</body>

</html>