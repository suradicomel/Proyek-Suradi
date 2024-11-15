<?php
session_start();

//periksa apakah sesi'nim'sudah ada
if(!isset($_SESSION['nim'])){
    //jika sesi tidak ada, arahkan ke halaman login
    header("Location:index.php");
    exit();
}

$nim=$_SESSION['nim'];
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
        .dashboard-container{
            max-width:600px;
            margin:50px auto;
            background-color:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0, 0, 0.1);
        }
        h2{
            text-align:center;
            color:#333;
        }
        .welcome{
            text-align:center;
            font-size:20px;
            margin:20px 0;
        }
        .logout{
            text-align:center;
            margin-top:20px;
        }
        a{
            padding:10px20px;
            beckground-color:#4CAF50;
            color:white;
            tekt-decoration:none;
            border-radius:4px;
        }
        a:haver{
            beckground-color:#45a049;
        }
    </style>
</head>
<body>
    
<div class="dashboard-container">
    <h2>Welcome to the Dashboard</h2>

    <div class="welcome">
        <p>selamat datang,<php echo htmlspecialchars($nim);?>!</p>
        <p>Anda berhasil login ke sitem!</p>
    </div>

    <div class="logout">
        <a href="logout.php">logout.</a>
    </div>
    </div>

  
</body>
</html>