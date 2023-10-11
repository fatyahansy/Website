<?php

include '../connect.php';

$id_user= $_GET['id'];
$q = 'delete from user where id_user="'.$id_user.'"';


//echo $q;
mysqli_query($con,$q);
header('location: /web2/listuser.php');

?>