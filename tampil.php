<!DOCTYPE html>
<html>
<head>
<title>Monitoring Aplikasi</title>
<link rel="Stylesheet" href="style.css"/>
</head>
<body>
<div id="outwrapper">
<table id="table-c" align="right">
<tr>
<td><a href="logout.php">LOGOUT</a></td>
</tr>
<tr>
<td><a href="form_register.php">TAMBAH DATA</a></td>
</tr>
</table></div>
<div id="wrapper">
<div id="header"></div>
<div id="header2"></div>
<nav>
	<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="#">DASHBOARD EXECUTIVE</a></li>	
		<li><a href="#">SDPPI REPORTS</a></li>
		<li><a href="#">APLIKASI SPJ</a></li>
		<li><a href="#">HELPDESK SIMS</a></li>
		<li><a href="#">HONEYPOT ACTIVITY</a></li>
		<li><a href="#">PROJECT MANAGEMENT</a>
		<ul>
				<li><a href="#">PROJECT MANAGEMENT</a></li>
				<li><a href="#">PROJECT MANAGEMENT</a></li>
				<li><a href="#">PROJECT MANAGEMENT</a>
			</ul>
		</li>
	</ul>
</nav>
<div id="content">
<div id="artikel2">

<?php
include('koneksi.php');
?>

<body>
<table id="table-b" align=center>
<caption><h3>DATA</h3></caption>
<thead>
<tr>
        <th>ID</th>
        <th>KEGIATAN</th>
        <th>Pelaksana</th>
		<th>Action / Reports</th>
		<th>Tanggal Rencana Penyelesaian</th>
		<th>Tanggal Aktual Penyelesaian</th>
		<th>Status</th>
		<th>Keterangan</th>
		<th>Action</th>
        
        </tr>
</thead>
<tbody>
<?php

$query = mysql_query ("select*from kegiatan");

$no =  1;

while ($data = mysql_fetch_array($query)) {
?>
	<tr>
	<th><?php echo $no; ?></th>
	<td><?php echo $data ['kegiatan']; ?></td>
	<td><?php echo $data ['pelaksana']; ?></td>
	<td><?php echo $data ['reports']; ?></td>
	<td><?php echo $data ['rencana']; ?></td>
	<td><?php echo $data ['aktual']; ?></td>
	<td><?php echo $data ['status']; ?></td>
	<td><?php echo $data ['keterangan']; ?></td>
	<td>
	<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
	<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
     </td>
	
</tr>
<?php
$no++;
}
?>
</tbody>
</table>
</div></div>
<div id="footer" style="margin-top: -10px;">
DIREKTORAT JENDRAL SUMBER DAYA DAN PERANGKAT POS DAN INFORMATIKA<br>
Jl. Medan Merdeka Barat No. 17 Jakarta Pusat 10110
</div>
<div id="footer2" style="margin-top: -1px;"></div>
</div>
</div>
</body>
</html>