<?php
// Database connection
$con = new mysqli('localhost', 'root', '', 'imageuploder');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
