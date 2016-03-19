<html>
<head><link rel="icon" href="images/kominfo.png">
<title>Monitoring Aplikasi</title>
<link rel="Stylesheet" href="style.css"/>
</head>
<body>
	<FORM action="simpan.php" method="POST">
	<table id="tablelogin" align="center">
	<caption><h3>Form Input</h3></caption>
  <tr>
	<td>Kegiatan</td>
	<td>:</td>
	<td><input type="text" name="kegiatan"></td>
  </tr>
    <tr>
	<td>Pelaksana</td>
	<td>:</td>
	<td><input type="text" name="pelaksana"></td>
  </tr>
  <tr>
	<td>Action / Report</td>
	<td>:</td>
<td><input type="text" name="reports"></td>
  </tr>
  <tr>
	<td>Tanggal Rencana Penyelesaian</td>
	<td>:</td>
	<td><input type="text" name="rencana" placeholder="yyyy-MM-dd"></td>
  </tr>
  <tr>
	<td>Tanggal Aktual Penyelesaian</td>
	<td>:</td>
	<td><input type="text" name="aktual" placeholder="yyyy-MM-dd"></td>
  </tr>
  <tr>
	<td>Status</td>
	<td>:</td>
	<td><input type="text" name="status"></td>
  </tr>
    <tr>
	<td>Keterangan</td>
	<td>:</td>
	<td><input type="text" name="keterangan"></td>
  </tr>
  <td><a href="tampil.php">Lihat Data</a></td>
	<td align="center" colspan="3"><input type="submit" name="proses" value="Proses">
	<input type="reset" name="reset" value="Reset"></td>
</table>
</form>
</body>
</html>