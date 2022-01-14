<?php

include 'connection.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $query = "DELETE FROM `crud` WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result) {
        // echo 'Delete success!';
        header('location: contact_database.php');
    } else {
        die(mysqli_error($con));
    }
}

?>
