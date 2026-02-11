<?php
$nama_lengkap = "Finza Risqi Putra Winata";
$nama_panggilan = "Finza";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal = 9;
$bulan = "November";
$tahun = 2009;
$alamat = "jalan brotojoyo 3 rt 3 rw 3, Kelurahan Panggung kidul,kota semarang";
$gender = "Laki-laki";
$kewarganegaraan = "Indonesia";
$no_wa = "08812669755";
$email = "winatafinza43@gmail.com";

    $hobi = ["bermain game", "futsal", "bermain musik"];
    $skills = [
        "game" => 80,
        "pelajaran kejuruhan" => 10,
        "pelajaran non kejuruhan" => 70];
    $makanan = ["Nasi Goreng", "Mie Ayam", "Bakso"];
    $minuman = ["Es Teh", "kopi", "Jus alpukat"];

$motto = "SUKSES TIDAK AKAN DATANG KEPADAMU, KALAU KAMU TIDAK PERNAH BERUSAHA";
    $tahun_sekarang = date("Y");
    $umur = $tahun_sekarang - $tahun;
    $tahun_10 = $tahun_sekarang + 10;
    $umur_10 = $umur + 10;
?>
<!DOCTYPE html>
<html>
<head>
<head>
<title>Biodata</title>
<div class="logo-box">
    <div class="logo-box">
    <img src="images-removebg-preview.png" class="logo">
    <canvas id="petirCanvas"></canvas>
</div>
</div>
<div class="clock-box">
    <div id="tanggal"></div>
    <div id="jam"></div>
</div>
</head>
<link rel="stylesheet" href="Style1.css">
<button onclick="gantiWarna()">Ganti Warna Card</button>
<button onclick="toggleDarkMode()"> Dark Mode</button>
<body>
    <div id= "jam"></div>
<div class="card">
<h1>Biodata Finza</h1>
<img src="zaa.jpeg" class="foto" alt ="Foto Finza" >
<p>Nama Lengkap: <?= $nama_lengkap ?></p>
<p>Nama Panggilan: <?= $nama_panggilan ?></p>
<p>Agama: <?= $agama ?></p>
<p>Tempat, Tgl Lahir: <?= $tempat_lahir ?>, <?= "$tanggal-$bulan-$tahun" ?></p>
<p>Umur: <?= $umur ?> tahun</p>
<p>Alamat: <?= $alamat ?></p>
<p>Gender: <?= $gender ?></p>
<p>Kewarganegaraan: <?= $kewarganegaraan ?></p>
<p>No WA: <?= $no_wa ?></p>
<p>Email: <?= $email ?></p>

<h3>Hobi</h3>
<ol>
<?php foreach($hobi as $hb){ echo "<li>$hb</li>"; } ?>
</ol>

<h3>Skills</h3>
<?php foreach($skills as $skill => $nilai){ ?>
    <p><?= $skill ?> : <b><?= $nilai ?>%</b></p>
    <input type="range" min="0" max="100" value="<?= $nilai ?>" disabled class="range">
<?php } ?>

<h3>Makanan Favorit</h3>
<ul style="list-style-type:square">
<?php foreach($makanan as $m){ echo "<li>$m</li>"; } ?>
</ul>

<h3>Minuman Favorit</h3>
<ol type="A">
<?php foreach($minuman as $d){ echo "<li>$d</li>"; } ?>
</ol>

<h3>Riwayat Pendidikan</h3>
<table border="1" cellpadding="8">
<tr>
<th>Tingkat</th><th>Nama Sekolah</th><th>Tahun Mulai</th><th>Tahun Lulus</th>
</tr>
<tr>
<td>SD</td><td>SDN Bululor</td><td>2016</td><td>2022</td>
</tr>
<tr>
<td>SMP</td><td>SMP Kamu</td><td>2022</td><td>2025</td>
</tr>
</table>

<h3>Keinginan 10 Tahun Lagi</h3>
<p>
Hai namaku <?= $nama_panggilan ?>, saat ini tahun <?= $tahun_sekarang ?>,
aku adalah <?= $gender ?> yang berumur <?= $umur ?> tahun.
10 tahun lagi di tahun <?= $tahun_10 ?>, di umur <?= $umur_10 ?> tahun
aku adalah orang sukses, aku ingin membahagiakan orang tua,
rencana yang akan aku tempuh adalah belajar dengan giat dan bekerja keras.
</p>
<div class="marquee">
<marquee><?= $motto ?></marquee>
</div>
<br>
    <center>
    <a href="jadwal_pelajaran.php" class="navigasi">Lihat Jadwal Pelajaran</a> 
    <a href="piket_kelas.php" class="navigasi">Lihat Jadwal Piket</a>
    </center>
</body>
<script src="jawa.js"></script>
</html>