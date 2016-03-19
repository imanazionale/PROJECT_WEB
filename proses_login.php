<?php 
session_start();
include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("select*from user where username='$username' and password='$password'");

$cek=mysql_num_rows($query);
if($cek){
$_SESSION['username'] = $username;															
?>Anda berhasil login. silahkan menuju <a href="tampil.php">Halaman HOME</a><?php
} else {
?>Anda gagal login. silahkan <a href="form_login.php">Login Kembali</a><?php
echo mysql_error();
}
?>