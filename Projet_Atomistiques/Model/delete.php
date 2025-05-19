<?php

include_once 'database.php';

extract($_POST);

$sql = "DELETE FROM `atome` WHERE id=$id";

$query = $select = mysqli_query($conn,$sql);
header("location:../Views/list.php");

?>