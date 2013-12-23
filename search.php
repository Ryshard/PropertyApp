<?php
session_start();
//print_r($_POST);



$_SESSION['search'] = array();
if (!empty($_POST['county']))
$_SESSION['search']['county'] = $_POST['county'];

if (!empty($_POST['city']))
$_SESSION['search']['city'] = $_POST['city'];

if (!empty($_POST['bedrooms']))
$_SESSION['search']['bedrooms'] = $_POST['bedrooms'];

if (!empty($_POST['type']))
$_SESSION['search']['type'] = $_POST['type'];

header("location: index.php?action=proplist");
//header("location: propertyjson.php");
?>


