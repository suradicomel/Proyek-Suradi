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