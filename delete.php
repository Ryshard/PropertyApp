<?php
session_start();
 $_SESSION['loggedIn']=1 or die('Access Denied');
 
 
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 
 
 if (!empty($_GET['id'])){
$id = $_GET['id'];

$db->delete('properties', 'property_id = '.$id);
$db->delete('properties_x_sold', 'property_id = '.$id);
header("location: index.php?action=proplist_admin");

 }
 else {
     echo 'What are you doing here ??? ';
 }