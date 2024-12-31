<?php 
 session_start();
 ob_start();

 include "../config/koneksi.php";

//  CEK SESI LOGIN
 if(empty($_SESSION['username']) or empty($_SESSION['password'])){
    header("location:login.php");

 }else{
   header("location:dashboard.php");
   $sesi=$_SESSION['username'];
 }
?>

