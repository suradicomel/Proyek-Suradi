<?php
session_start();

//Hardcoded user data as an example(to be replaced with a database in a real application)
$valid_nim="12345678";
$valid_password="user123";

//Check if form is submited
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nim=$_POST["nim"];
    $password=$_POST["password"];

    //Chekc if NIM exists and password matches
    if($nim===$valid_nim&&$password===$valid_password){
        $_SESSION["nim"]=$nim;
        header("Location:login/login.php");
        exit();
    }else{
        echo"<script>alert('NIM atau password salah!);window.location.href='index.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login mahasiswa</h2>
        <form  method="POST" onsubmit="return validateForm()">
            <label for="nim">NIM:</label>
            <input type="text"id="nim"name="nim"required>
            <label for="password">password:</label>
            <input type="password"id="password"name="password"required>
            <button type="submit">Login</button>
            <p id="error-msg"></p>
</form>
</div>
<script src="main.js"></script>
    
</body>
</html>