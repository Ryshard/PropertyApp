<?php
session_start();
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 
 $sql = 'SELECT * FROM properties where ';
 
 if (!empty($_SESSION['search'])){
     
     $count = 0; 
     foreach ($_SESSION['search'] as $label => $value) {
         $sql.= "$label = "."'".$value."' ";
         $count += 1; 
         if ($count <  sizeof($_SESSION['search']))
             $sql.= " and ";
         
     }
     
    }
else 
 $sql.= ' 1 ';
 
$stmt = $db->query($sql);
 
$rows = $stmt->fetchAll();


//print_r($rows);


header('Content-Type: application/json');  
      
    /* Create a variable to hold your JSON data */  
      
       $jsonOutput =  json_encode($rows);  
      
    /* Output the JSON data */  
      
      echo $jsonOutput;