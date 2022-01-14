<?php

$con = new mysqli('localhost', 'root', '', 'crud_database');

if (!$con) {
    die(mysqli_error($con));
}
?>

