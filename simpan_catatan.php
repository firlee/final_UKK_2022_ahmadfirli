<?php 
session_start();
$nisn = $_SESSION['nisn'];
$nama_lengkap = $_SESSION['nama_lengkap'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$kegiatan =$_POST['lokasi'];
$hasil =$_POST['suhu_tubuh'];
$id_catatan=rand(1000,100000);

$format = "\n$id_catatan|$nisn|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu_tubuh";

//buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file catatan
fclose($file); ?>

<script type="text/javascript">
alert("Data catatan berhasil ditambahkan");
window.location.assign('user.php');
</script>