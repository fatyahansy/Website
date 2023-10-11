<?php

include '../connect.php';

$id_kamar=$_GET['id'];
$q = 'delete from kamar where id_kamar="'.$id_kamar.'"';


//echo $q;
mysqli_query($con,$q);
header('location:  /web2/listhistory.php');

?>