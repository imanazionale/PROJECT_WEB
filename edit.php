<?php
include('koneksi.php');
?>
<html>
<head>
<title>Monitoring Aplikasi</title>
<link rel="Stylesheet" href="css/style.css"/>
</head>
<body>
<?php
$id=$_GET['id'];

$query = mysql_query("select * from kegiatan where id='$id'") or die (mysql_error());

$data = mysql_fetch_array($query);
?>
<form action = "ubah.php" method ="post">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table id="tablelogin" align="center">
	<caption><h3>Form Update</h3></caption>
    <tbody>
        <tr>
            <td>Kegiatan</td>
            <td>:</td>
            <td><input type="text" name="kegiatan" value="<?php echo $data['kegiatan']; ?>" /></td>
        </tr>
		<tr>
            <td>Pelaksana</td>
            <td>:</td>
			<td><input type="text" name="pelaksana" value="<?php echo $data['pelaksana']; ?>" /></td>
        </tr>
        <tr>
            <td>Action / Reports</td>
            <td>:</td>
			<td><input type="text" name="reports" value="<?php echo $data['reports']; ?>" /></td>
        </tr>
        <tr>
            <td>Tanggal Rencana Penyelesaian</td>
            <td>:</td>
            <td><input type="text" name="rencana" placeholder="yyyy-MM-dd" value="<?php echo $data['rencana']; ?>" /></td>
        </tr>
		<tr>
			<td>Tanggal Aktual Penyelesaian</td>
			<td>:</td>
			<td><input type="text" name="aktual" placeholder="yyyy-MM-dd" value="<?php echo $data['aktual']; ?>" /></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td><input type="text" name="status" value="<?php echo $data['status']; ?>" /></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>" /></td>
		</tr>
		<td></td>
	<td align="center" colspan="3"><input type="submit" name="proses" value="Simpan">
	<input type="reset" name="reset" value="Reset"></td>
    </tbody>
</table>
</form>
</body>
</html>