<?php
include('koneksi.php');


$id = $_POST['id'];
$kegiatan = addslashes(strip_tags($_POST['kegiatan']));
$pelaksana = addslashes(strip_tags($_POST['pelaksana']));
$reports = addslashes(strip_tags($_POST['reports']));
$rencana = addslashes(strip_tags($_POST['rencana']));
$aktual = addslashes (strip_tags($_POST['aktual']));
$status = addslashes(strip_tags($_POST['status']));
$keterangan = addslashes (strip_tags($_POST['keterangan']));

$query = mysql_query("update kegiatan set kegiatan='$kegiatan', pelaksana='$pelaksana', reports='$reports', rencana='$rencana', aktual='$aktual', status='$status',keterangan='$keterangan' where id='$id'") or die(mysql_error());
if ($query) {
	header('location:tampil.php?message=success');
}
?>
