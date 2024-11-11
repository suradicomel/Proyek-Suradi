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
        header("Location:indexphp/login.php");
        exit();
    }else{
        echo"<script>alert('NIM atau password salah!);window.location.href='index.php';</script>";
        exit();
    }
}
?>