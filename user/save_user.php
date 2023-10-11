<?php

include('../connect.php');

$username = $_POST['usernameuser'];
$password = $_POST['passworduser'];
$jabatan = $_POST['jabatanuser'];

$q = 'insert into user (username, password, jabatan) value ("' . $username . '","' . $password . '","' . $jabatan . '")';

// echo $q;
mysqli_query($con, $q);

// redirect halaman
header('location: /web2/listuser.php');