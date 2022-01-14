<?php

include 'lonin.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $qurry = "INSERT INTO crud(Name, Email, Password, Mobile) VALUES ('$name','$email','$password','$mobile')";

    $result = mysqli_query($con, $qurry);

    if ($result) {
        // echo 'Data success inserted!';
        header('location: index.php');
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
                <input type="text" class="form-control my-3" autocomplete="off"
                placeholder="Enter your name" name="name">
            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control my-3" autocomplete="off" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group mb-3">
                <label>subject</label>
                <input type="text" class="form-control my-3" autocomplete="off" placeholder="Enter your password" name="password">
            </div>
            <div class="form-group mb-3">
                <label>Message</label><br>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>

            <!-- <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button> -->
            <button type="submit" class="btn btn-primary my-3 d-right" name="submit"><a href="../contact_database.php" class="text-light">Go back</a></button><br>
        </form>
    </div>

</body>

</html>