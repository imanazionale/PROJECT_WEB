<!DOCTYPE html>
<html>
<head><link rel="icon" href="images/kominfo.png">
<title>Monitoring Aplikasi</title>
<link rel="Stylesheet" href="style.css"/>
</head>
<div id="outwrapper">
<body>
<script type="text/javascript" language="javascript">
function renderTime(){
var currentTime = new Date();
var h = currentTime.getHours();
var m = currentTime.getMinutes();
var s = currentTime.getSeconds();
if (h == 0){
h = 24;
}
if (h < 10){
h = "0" + h;
}
if (m < 10){
m = "0" + m;
}
if (s < 10){
s = "0" + s;
}
var myClock = document.getElementById('clockDisplay');
myClock.textContent = h + ":" + m + ":" + s + "";
setTimeout ('renderTime()',1000);
}
renderTime();
</script></div></body>
<body>

<div id="wrapper">

<div id="header"></div>
<div id="header2"></div>
<nav>
	<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="http://dashboard.ditfrek.postel.go.id">DASHBOARD EXECUTIVE</a></li>	
		<li><a href="http://report.ditfrek.postel.go.id">SDPPI REPORTS</a></li>
		<li><a href="http://10.1.25.29/appspj">APLIKASI SPJ</a></li>
		<li><a href="http://helpdesksims.ditfrek.postel.go.id/support/"target="_blank">HELPDESK SIMS</a></li>
		<li><a href="http://10.1.4.32/kippo-graph/kippo-graph.php">HONEYPOT ACTIVITY</a></li>
		<li><a href="project.php">PROJECT MANAGEMENT</a>
		<ul>
				<li><a href="#">PROJECT MANAGEMENT</a></li>
				<li><a href="#">PROJECT MANAGEMENT</a></li>
				<li><a href="#">PROJECT MANAGEMENT</a>
			</ul>
		</li>
	</ul>
</nav>
<div id="content">
<div id="artikel">
<table id="table-a" align="center">
<caption><h3>KEGIATAN MINGGU LALU</h3></caption>
    <tr>
        <th>ID</th>
        <th>KEGIATAN</th>
        <th>Pelaksana</th>
		<th>Action / Reports</th>
        <th>Tanggal Rencana Penyelesaian</th>
        <th>Tanggal Aktual Penyelesaian</th>
		<th>Status</th>
        <th>Keterangan</th>
    </tr>
    <tr>
        <th>1</th>
        <td>Mendampingi PT. Andhika melakukan test power on pada UPS DRC Ciracas</td>
        <td>PAA</td>
		<td>Selesai</td>
        <td>6 Oktober</td>
        <td>27 Oktober</td>
		<td>Selesai</td>
<td>-</td>
    </tr>
    <tr>
        <th>2</th>
        <td>Melakukan instalasi kawat ram pada exhaust AC APC DRC Ciracas</td>
        <td>PAA</td>
		<td>Selesai</td>
        <td>6 Oktober</td>
        <td>23 Oktober</td>
		<td>Selesai</td>
<td>-</td>
    </tr>
	<tr>
        <th>3</th>
        <td>Menambahkan kolom perangkat rusak berat dan perangkat tidak dapat diperbaiki pada list perangkat yang dipelihara tahun 2015</td>
        <td>PAA</td>
		<td>Selesai</td>
        <td>6 Oktober</td>
        <td>7 Oktober</td>
		<td>Selesai</td>
<td>-</td>
    </tr>
    <tr>
        <th>4</th>
        <td>Menambahkan kolom estimasi biaya pada tabel summary rekomendasi pemeliharaan di tahun 2015</td>
        <td>PAA</td>
		<td>Selesai</td>
        <td>6 Oktober</td>
        <td>7 Oktober</td>
		<td>Selesai</td>
		<td>-</td>
    </tr>
	<tr>
        <th>5</th>
        <td>Diskusi dengan tim Sigma mengenai rencana implementasi plan D</td>
        <td>PAA</td>
		<td>Selesai</td>
        <td>6 Oktober</td>
        <td>7 Oktober</td>
		<td>Selesai</td>
<td>-</td>
    </tr>
    <tr>
        <th>6</th>
        <td>Merekomendasikan penggunaan virtual desktop / SSO dan membeli license PRTG, penggunaan NVR.</td>
        <td>PAA</td>
		<td>Selesai</td>
        <td>6 Oktober</td>
        <td>8 Oktober</td>
		<td>Selesai</td>
<td>-</td>
    </tr>
	<tr>
        <th>7</th>
        <td>Melakukan instalasi kabel antenna untuk TV pada lantai 7</td>
        <td>PAA</td>
		<td>Selesai</td>
        <td>6 Oktober</td>
        <td>9 Oktober</td>
		<td>Selesai</td>
<td>-</td>
    </tr>
</table>
<table id="table-a" align="center">
<caption><h3>KEGIATAN MINGGU BERIKUTNYA</h3></caption>
    <tr>
        <th>ID</th>
        <th>KEGIATAN</th>
        <th>Pelaksana</th>
        <th>Status</th>
        <th>Tanggal Rencana Penyelesaian</th>
		<th>Tanggal Rencana Penyelesaian (Update)</th>
        <th>Comments</th>
    </tr>
    <tr>
        <th>1</th>
        <td>Membuat laporan pekerjaan atau progress penyambungan kabel power DC Lt.2</td>
        <td>PAA</td>
		<td>Akan dilaksanakan</td>
        <td>25 Oktober</td>
        <td>-</td>
<td>-</td>
    </tr>
    <tr>
        <th>2</th>
        <td>Membuat form change management untuk instalasi VSOM</td>
        <td>PAA</td>
		<td>Akan dilaksanakan</td>
        <td>27 Oktober</td>
        <td>-</td>

<td>-</td>
    </tr>
	<tr>
        <th>3</th>
        <td>Melakukan back up aplikasi dan virtual machine SIMS</td>
        <td>PAA</td>
		<td>Akan dilaksanakan</td>
        <td>28 Oktober</td>
        <td>-</td>
	<td>-</td>
    </tr>
    <tr>
        <th>4</th>
        <td>Mendampingi PT.Andhika dalam melakukan test power UPS ON</td>
        <td>PAA</td>
		<td>Akan dilaksanakan</td>
        <td>27 Oktober</td>
        <td>-</td>
		<td>-</td>
    </tr>
	<tr>
        <th>5</th>
        <td>Menanyakan kepada mas Yogo untuk list harga airport Tax</td>
        <td>PAA</td>
		<td>Akan dilaksanakan</td>
        <td>28 Oktober</td>
        <td>-</td>
		<td>-</td>
    </tr>
    <tr>
        <th>6</th>
        <td>Melakukan kustomisasi pada tampilan operasional web SDPPI</td>
        <td>PAA</td>
		<td>Akan dilaksanakan</td>
        <td>28 Oktober</td>
        <td>-</td>
		<td>-</td>
    </tr>
	<tr>
        <th>7</th>
        <td>Melakukan pembelian terhadap 3 Camera CCTV D-Link</td>
        <td>PAA</td>
		<td>Akan dilaksanakan</td>
        <td>22 Oktober</td>
        <td>-</td>
		<td>-</td>
    </tr>
</table>
</div>
<div id="sidebar">
    <FORM action="proses_login.php" method="POST">
    <table id="tablelogin" align="center">
<caption><h3>LOGIN</h3></caption>
  <tr>
    <th>Username</th>
    <td>:</td>
    <td><input type="text" name="username" placeholder="Username" required="required"></td>
  </tr>
  <tr>
    <th>Password</th>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Password"  required="required"></td>
  </tr>
    <td align="right" colspan="3"><input type="submit" name="proses" value="Login"><input type="reset" name="reset" value="Reset"></td>
</table>
</form>
</div>
</div>
<div id="footer" style="margin-top: -10px;">
DIREKTORAT JENDRAL SUMBER DAYA DAN PERANGKAT POS DAN INFORMATIKA<br>
Jl. Medan Merdeka Barat No. 17 Jakarta Pusat 10110
</div>
<div id="footer2" style="margin-top: -1px;"></div>
</div>
</body>
</html>