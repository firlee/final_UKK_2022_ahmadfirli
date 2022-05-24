<?php 

$NIK = $_POST['NIK'];
$nama_lengkap = $_POST['nama_lengkap'];

$format = "$NIK|$nama_lengkap";
$file = file('config.txt',FILE_IGNORE_NEW_LINES);

if(in_array($format, $file)){ // Jika data ditemukan
    session_start();
    $_SESSION['NIK'] = $NIK;
    $_SESSION['nama_lengkap'] = $nama_lengkap;

    header('location:user.php');

 
}else{ // jika data tidak ditemukan ?>
    <script type ="text/javascript">
        alert("!!! NIK atau nama lengkap anda salah!");
        window.location.assign('index.php');
    </script> 
    <?php
}