<?php

session_start();

include 'connection.php';
include 'function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        // read from database
        $user_id = random_num(25);
        $query = "select * from crud_bio where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header('Location: contact_database.php');
                    die();
                }
            }
        }
        ?>
        <!-- This is not your site click go back! -->
        <?php echo '<script>alert("This is only for admin please click go back!")</script>'; ?>
    <?php
    } else {
         ?>
        <!-- This is not your site click go back! -->
        <?php echo '<script>alert("This is only for admin please click go back!")</script>'; ?>
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
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    <style type="text/css">
        a{
            text-decoration: none;
        }
    </style>

        <div class="container m-5 p-3">
            <div class="row justify-content-center">
                <div class="col-6  bg-light">
                <form action="" method="post">
                    <div style="font-size: 20px; margin: 10px; text-align: center;">Login</div>
                    
                    <div class="form-group mb-3">
                        <label>User name</label>
                        <input type="text" class="form-control my-3" autocomplete="off"
                        placeholder="Enter your username" name="user_name">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control my-3" autocomplete="off" placeholder="Enter your password" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary my-3" name="submit">Login</button>
            <button type="submit" class="btn btn-primary my-3 d-right" name="submit"><a href="../index.php" class="text-light">Go back</a></button><br>

                    <a href="signup.php">Click to Signup</a><br><br>
                </form>
                </div>
            </div>
        </div>
</body>
</html>