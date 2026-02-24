<?php
$nama_lengkap = "Maharani Rosyadah Najah";
$nama_panggilan = "Maharani";
$tahun_lahir = 2010;
$alamat = "JL. borobudur utara IV no 75, Semarang Barat";
$email = "rossa2810@email.com";
$foto = "WhatsApp Image 2026-02-24 at 9.19.50 PM.jpeg";
$motto = "When I start and Never Stop!!!!!";

$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;
$tahun_10 = $tahun_sekarang + 10;
$umur_10 = $umur + 10;

$hobi = ["Membuat Kue", "Nonton Film"];
$makanan = ["Bakso", "Nasi Goreng", "Mie Ayam"];
$minuman = ["Es Teh", "Jus Alpukat", "Air Mineral"];

$skills = [
    "Mencari film yang seru ditonton" => 95
];

$halaman = isset($_GET['page']) ? $_GET['page'] : 'biodata';

$nama_saya = "Maharani,"; //

$piket = [
    "Senin" => ["Cindy,", "Shesanata,", "Tsabita,", "Naila,", "Kartika,","Rasya,", "Yusuf,","Habibi."],
    "Selasa" => ["Keisha,","Shafanira,", "Aurora,", "Sila,", "Syauqi," , "Nail,", "Wahyu."],
    "Rabu" => ["Anin,", "Shifa,", "Tania," , "Fasya,","Eka,","Dzaky,","Vino."],
    "Kamis" => ["Aida,", "Maharani,","Alyaa,","Denia,","Ravid,","Ibnu,","Tegar."],
    "Jumat" => ["Aqila,", "Alais,", "Gendhis,","Cloudya,","Aziz,","Raka,","Rayhan."]
];

$jadwal = [
    1 => ["MTK","IPAS","PGD","POR","INF"],
    2 => ["MTK","IPAS","PGD","POR","INF"],
    3 => ["SJR","IPAS","PGD","POR","KKA"],
    4 => ["PABP","IPAS","PGD","SJR","KKA"],
    5 => ["PABP","PPS","PGD","BNG","IPAS"],
    6 => ["PABP","PPS","PGD","BNG","IPAS"],
    7 => ["BNG","BJW","GIM","MTK","PGD"],
    8 => ["BNG","BJW","GIM","MTK","PGD"],
    9 => ["BIN","SNM","GIM","BIN","-"],
    10 => ["BIN","SNM","GIM","BIN","-"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata & Jadwal</title>
<style>
body{
    font-family:Arial;
    background:linear-gradient(to bottom,#0077b6,#00b4d8);
    color:white;
    padding:20px;
}
.container{
    width:85%;
    margin:auto;
    background:rgba(0,0,50,0.6);
    padding:25px;
    border-radius:20px;
}
img{
    border-radius:50%;
    border:5px solid #90e0ef;
}
table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}
th,td{
    border:1px solid white;
    padding:8px;
    text-align:center;
}
.highlight{
    background:yellow;
    color:black;
    font-weight:bold;
}
a{
    color:yellow;
    font-weight:bold;
    text-decoration:none;
}
.motto{
    overflow:hidden;
    width:100%;
    margin-top:20px;
}
.motto h3{
    display:inline-block;
    white-space:nowrap;
    animation:gerak 10s linear infinite;
}
@keyframes gerak{
    from{transform: translateX(100%);}
    to{transform: translateX(-100%);}
}
</style>
</head>

<body>
<div class="container">

<?php if($halaman == 'biodata'){ ?>

<h1>🌊 Biodata Rani 🌊</h1>

<center>
<img src="<?= $foto ?>" width="150"><br><br>
</center>

<p><b>Nama:</b> <?= $nama_lengkap ?></p>
<p><b>Nama:</b> <?= $nama_panggilan ?></p>
<p><b>Umur:</b> <?= $umur ?> tahun</p>
<p><b>Alamat:</b> <?= $alamat ?></p>
<p><b>Email:</b> <?= $email ?></p>

<h3>Keinginanku 10 Tahun Lagi</h3>
<p>
Hai namaku <?= $nama_panggilan ?>, saat ini tahun <?= $tahun_sekarang ?>,
aku berumur <?= $umur ?> tahun.
10 tahun lagi di tahun <?= $tahun_10 ?>, di umur <?= $umur_10 ?> tahun
Sepuluh tahun lagi, saya ingin menjadi seorang konsultan IT yang sukses, dikenal karena kinerja yang cekatan, profesional, dan terpercaya. Saya juga ingin mendirikan startup yang berkembang besar dan memberikan dampak positif bagi banyak orang.
</p>

<h3>🎮 Hobi</h3>
<ol>
<?php foreach($hobi as $h){ echo "<li>$h</li>"; } ?>
</ol>

<h3>🍜 Makanan Favorit</h3>
<ul>
<?php foreach($makanan as $m){ echo "<li>$m</li>"; } ?>
</ul>

<h3>🥤 Minuman Favorit</h3>
<ul>
<?php foreach($minuman as $d){ echo "<li>$d</li>"; } ?>
</ul>

<h3>🎬 Skills</h3>
<?php foreach($skills as $skill => $nilai){ ?>
<p><?= $skill ?></p>
<input type="range" min="0" max="100" value="<?= $nilai ?>" disabled>
<br><br>
<?php } ?>

<div class="motto">
<h3><?= $motto ?></h3>
</div>

<br>
<a href="?page=jadwal">➡ Lihat Jadwal</a>

<?php } else { ?>

<h2>Jadwal Pelajaran X PPLG 2</h2>
<table>
<tr>
<th>Jam</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
</tr>

<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    echo "<td>$i</td>";
    foreach($jadwal[$i] as $mapel){
        echo "<td>$mapel</td>";
    }
    echo "</tr>";
}
?>
</table>

<br><br>

<h2>Jadwal Piket</h2>
<table>
<tr>
<th>Hari</th>
<th>Nama</th>
</tr>

<?php
foreach($piket as $hari => $nama){
    echo "<tr>";
    echo "<td>$hari</td>";
    echo "<td>";
    foreach($nama as $orang){
        if($orang == $nama_saya){
            echo "<span class='highlight'>$orang</span> ";
        } else {
            echo "$orang ";
        }
    }
    echo "</td>";
    echo "</tr>";
}
?>
</table>

<br>
<a href="biodata.php">⬅ Kembali ke Biodata</a>

<?php } ?>

</div>
</body>
</html>