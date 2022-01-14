<?php
session_start();

include 'connection.php';
include 'function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // save to database
        $user_id = random_num(25);
        $query = "insert into crud_bio (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header('Location: login.php');
        die();
    } else {
         ?>
        <!-- alert blank sumnit! -->
        <?php echo '<script>alert("Please create your account!")</script>'; ?>
    <?php
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <style type="text/css">
        a {
            text-decoration: none;
        }
    </style>


    <div class="container m-5 bg-light p-3">
        <div class="row justify-content-center">
            <div class="col-6 bg-light">
                <form action="" method="post">
                    <div style="font-size: 20px; margin: 10px; text-align: center;">Signup</div>

                    <div class="form-group mb-3">
                        <label>User name</label>
                        <input type="text" class="form-control my-3" autocomplete="off" placeholder="Enter your username" name="user_name">
                    </div>

                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control my-3" autocomplete="off" placeholder="Enter your password" name="password">
                    </div>


                    <button type="submit" class="btn btn-primary my-3" name="submit">Register</button>
                    <button type="submit" class="btn btn-primary my-3 d-right" name="submit"><a href="../index.php" class="text-light">Go back</a></button><br>

                    <a href="login.php">Click to Login</a><br><br>
                </form>
            </div>
        </div>

    </div>
</body>

</html>