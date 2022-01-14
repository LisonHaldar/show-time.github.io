<?php
session_start();

include 'function.php';
include 'connection.php';

$user_data = check_login($con);
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
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <button class="btn btn-primary mt-5 mb-3 mx-5">
        <a href="logout.php" class="text-light">Logout</a>
    </button>
    <h3 class="mx-5">
        Hello, <?php echo $user_data[
            'user_name'
        ]; ?>.<br> This is CRUD Database! You can <strong> Delete, Add, Update/Edit </strong> data. <br>Thanks. </h3>
    <br>
    <div class="container m-5">
        <button class="btn btn-primary my-3">
            <a href="user.php" class="text-light">Add user</a>
        </button>
        <!-- <button class="btn btn-primary my-3 mx-5">
        <a href="contact/contactdata.php" class="text-light">contact data</a>
        </button> -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Delete/Update</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $qurry = 'select * from crud';
                $result = mysqli_query($con, $qurry);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['Name'];
                        $email = $row['Email'];
                        $password = $row['Password'];
                        $mobile = $row['Mobile'];

                        echo '<tr>
          <th scope="row">' .
                            $id .
                            '</th>
          <td>' .
                            $name .
                            '</td>
          <td>' .
                            $email .
                            '</td>
          <td>' .
                            $password .
                            '</td>
          <td>' .
                            $mobile .
                            '</td>

              <td>
      <button class="btn btn-primary"><a href="update.php? updateid=' .
                            $id .
                            '" class="text-light">Ubdate</a></button>
      <button class="btn btn-danger"><a href="delete.php? deleteid=' .
                            $id .
                            '" class="text-light">Delete</a></button>
            </td>
        </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

</body>

</html>