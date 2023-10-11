<?php

include '../connect.php';

$id_user = $_POST['id_user'];
$username = $_POST['usernameuser'];
$password = $_POST['passworduser'];
$jabatan = $_POST['jabatanuser'];
$q = 'update user set username="'.$username.'", password="'.$password.'", jabatan="'.$jabatan.'" where id_user="'.$id_user.'"';

//echo $q;
mysqli_query($con,$q);
header('location: /web2/listuser.php');

?>