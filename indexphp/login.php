<?php
session_star();

//periksa apakah sesi'username'sudah ada
if(!isset($_SESSION['username'])){
    //jika sesi tidak ada, arahkan ke halaman login
    header("Location:index.php");
    exit();
}

$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family:Arial,sans-serif;
            background-color:#f4f4f4;
            margin:0;
            padding:0;
        }
    </style>
</head>
<body>
    
</body>
</html>