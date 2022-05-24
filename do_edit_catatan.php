<?php 
session_start();
$NIK = $_SESSION['NIK'];
$nama_lengkap = $_SESSION['nama_lengkap'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$harga =$_POST['lokasi'];
$nama_barang =$_POST['suhu_tubuh'];
$id_catatan=$_POST['id_catatan'];

$format = "\n$id_catatan|$NIK|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu_tubuh";

//buka file catatan.txt
$no= 0;
$data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $fragment = explode("|", $value);
    if($fragment['0']==$id_catatan){
        $line = $no-1; //mencati urutan baris ke berapa
    }
}

$data[$line] = $format;
$data = implode("\n", $data);
file_put_contents('catatan.txt',$data);
?>

<script type="text/javascript">
alert("Perubahan data catatan berhasil");
window.location.assign('user.php');
</script>