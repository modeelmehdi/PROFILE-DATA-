<?php
include("connect.php");

// Handle form submission
if(isset($_POST["submit"])){  
    $username = $_POST["username"];
    $mobile_no = $_POST["mobile_no"];
    $image = $_FILES["file"];

    $imagefilename = $image["name"];
    $imagefileerror = $image["error"];
    $imagefiletemp = $image["tmp_name"];

    // Extract file extension
    $filename_seperate = explode(".", $imagefilename);
    $file_extention = strtolower(end($filename_seperate));

    // Allowed extensions
    $extension = array('jpeg','jpg','png');

    if(in_array($file_extention, $extension)){
        // Upload folder path
        $upload_image = "upload/" . uniqid() . "_" . $imagefilename; 

        // Move uploaded file
        if(move_uploaded_file($imagefiletemp, $upload_image)){
            $sql = "INSERT INTO `registeration` (name, mobile_no, image) 
                    VALUES ('$username','$mobile_no','$upload_image')";
            
            if($con->query($sql)){
                echo "<div class='alert alert-success text-center'>Data inserted successfully!</div>";
            } else {
                die("DB Error: " . $con->error);
            }
        } else {
            echo "<div class='alert alert-danger text-center'>Failed to upload image.</div>";
        }
    } else {
        echo "<div class='alert alert-warning text-center'>Invalid file type. Only jpg, jpeg, png allowed.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">User Registration</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile No</label>
                <input type="text" name="mobile_no" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Image</label>
                <input type="file" name="file" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
