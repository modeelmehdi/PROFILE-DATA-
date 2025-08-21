<?php
include("connect.php");

// Fetch all data from table
$sql = "SELECT * FROM `registeration`";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">User Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['mobile_no']}</td>
                        <td><img src='{$row['image']}' alt='Profile Image'></td>
                        <td>
                            <a href='update.php?id={$row['id']}'><button class='btn edit-btn'>Update</button></a>
                            <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this record?');\"><button class='btn delete-btn'>Delete</button></a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
