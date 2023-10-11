<?php

include('../connect.php');

$tipe_kamar = $_POST['tipekamar'];
$id_kamar = $_POST['nokamar'];
$jml_jamaah = $_POST['jmljamaah'];
$stok_kamar = $_POST['stokkamar']; 
$harga_kamar = $_POST['hargakamar'];
$tgl_pergii = $_POST['tglpergii'];
$tgl_pulangg = $_POST['tglpulangg'];
$status_kamar = $_POST['statuskamar'];


$q = 'insert into kamar (tipe_kamar, jml_jamaah, stok_kamar, harga_kamar, tgl_pergii, tgl_pulangg, status_kamar) value ("' . $tipe_kamar . '","' . $jml_jamaah . '","' . $stok_kamar . '","' . $harga_kamar . '","' . $tgl_pergii . '","' . $tgl_pulangg . '","' . $status_kamar . '")';

// echo $q;
mysqli_query($con, $q);

// redirect halaman
header('location: /web2/listhistory.php');

?>