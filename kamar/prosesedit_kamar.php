<?php

include '../connect.php';

$id_kamar = $_POST['id_kamar'];
$jml_jamaah = $_POST['jmljamaah'];
$tipe_kamar = $_POST['tipekamar'];
$stok_kamar = $_POST['stokkamar'];
$status_kamar = $_POST['statuskamar'];
$harga_kamar = $_POST['hargakamar'];
$tgl_pergii = $_POST['tglpergii'];
$tgl_pulangg = $_POST['tglpulangg'];

$q = 'update kamar set tipe_kamar="'.$tipe_kamar.'", jml_jamaah="'.$jml_jamaah.'", stok_kamar="'.$stok_kamar.'", status_kamar="'.$status_kamar.'", harga_kamar="'.$harga_kamar.'", tgl_pergii="'.$tgl_pergii.'", tgl_pulangg="'.$tgl_pulangg.'" where id_kamar="'.$id_kamar.'"';

//echo $q;
mysqli_query($con,$q);
header('location: /web2/listhistory.php');

?>