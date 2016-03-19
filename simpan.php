<?php
include 'koneksi.php';

$kegiatan= addslashes(strip_tags($_POST['kegiatan']));
$pelaksana = addslashes(strip_tags($_POST['pelaksana']));
$reports = addslashes(strip_tags($_POST['reports']));
$rencana = addslashes(strip_tags($_POST['rencana']));
$aktual = addslashes (strip_tags($_POST['aktual']));
$status = addslashes(strip_tags($_POST['status']));
$keterangan = addslashes (strip_tags($_POST['keterangan']));

$query = mysql_query("insert into kegiatan values('','$kegiatan','$pelaksana','$reports','$rencana','$aktual','$status','$keterangan')")
		or die(mysql_error());
         
if ($query){
header ("location:form_register.php?message=succes");
}
?>