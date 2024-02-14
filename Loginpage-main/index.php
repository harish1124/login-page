<?php
require 'cofig.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 0px;
            margin-left: 10px;
            color: #333;
            text-decoration: none;
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        a:hover {
            background-color: #45a049;
        }

    </style>
</head>

<body>
    <h1>Welcome <?php echo $row["name"];?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>