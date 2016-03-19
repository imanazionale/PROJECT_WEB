<?php
include ('koneksi.php');

$id = $_GET ['id'];

$query = mysql_query("delete from kegiatan  where id='$id'")
or die(mysql_error());

if ($query) {
	header ('location: tampil.php?message=delete');
}
?>