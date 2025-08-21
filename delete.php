<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // First get image path to delete from folder
    $sql = "SELECT image FROM `registeration` WHERE id = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if ($row) {
        $imagePath = $row['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); // delete file from folder
        }
    }

    // Delete record from DB
    $sql = "DELETE FROM `registeration` WHERE id = $id";
    if ($con->query($sql) === TRUE) {
        header("Location: display.php");
        exit;
    } else {
        echo "Error deleting record: " . $con->error;
    }
}
?>
