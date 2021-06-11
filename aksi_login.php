<?php
session_start();
include('koneksi.php');

$usern=$_POST['user'];
$passw=$_POST['pass'];

$query=mysqli_query($koneksi,"select * from user where username = '$usern'and password = '$passw' ");
$cek=mysqli_num_rows($query);
if($cek==TRUE){
    $_SESSION['userna']=$usern;
    header("location:index.php");
}else{
    echo"<script> alert('your username or password are wrong'); location='login.php' </script>";
}
?>