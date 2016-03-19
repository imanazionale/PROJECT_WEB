<?php 
session_start();
if(ISSET($_SESSION['username'])) {
include "koneksi.php"; 
?>

<?php
echo "Selamat Datang : <strong>".$_SESSION['username']."</strong>";
?>

<h3>Ini adalah halaman admin</h3>
<a href="logout.php">Logout</a> 
<a href="form_register.php">Register</a>

<?php 
}else { 
?>Anda tidak boleh mengakses halaman ini. silahkan<a href="form_login.php">Login 
dahulu</a>
<?php 
}
?>