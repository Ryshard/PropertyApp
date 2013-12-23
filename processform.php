<?php
session_start();
   // Define path to application directory
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!= 1)
     die('Access Denied');


 define('MY_APP', 'whatever');
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 require_once('FormProperty.php');
  require_once('functions.inc.php');
  
 

 if (!empty($_POST)) {
    //echo 

 $form = new FormProperty();
 
 
 
 if ($form->isValid($_POST)) {
     
     $validValues = $form->getValues();
    // print_r($validValues);
    // echo "form is valid";
     
   $dbPropertiesTable = new Zend_DB_Table('properties');
     

     
     
 if ($_POST['property_id'] == 0)    { 
    $property_id =  $dbPropertiesTable->insert(array(
         'property_id' => null,
         'address_1' => $validValues['address_1'],
         'address_2' => $validValues['address_2'],
         'city' => $validValues['city'],
         'county' => $validValues['county'],  
        'type' => $validValues['type'], 
        'price' => $validValues['price'], 
        'contact' => $validValues['contact'],
        'bedrooms' => $validValues['bedrooms'],
        'size' => $validValues['size'],
        'date' => $_POST['date']
     ));
    
     uploadFiles($property_id);
    //print "<p>Record is: $property_id";
     
          $dbPropertyXsold = new Zend_DB_Table('properties_x_sold');
$record_id =  $dbPropertyXsold->insert(array(
         'property_id' => $property_id,
           'sold' => $_POST['status'],
         'agent_id' => $validValues['contact']
     ));

header("location: index.php?action=proplist_admin");
 }//end insert
 
 else {
     
      $movie_id =  $dbPropertiesTable ->update(array(
       
         'address_1' => $validValues['address_1'],
         'address_2' => $validValues['address_2'],
         'city' => $validValues['city'],
         'county' => $validValues['county'],  
        'type' => $validValues['type'], 
        'price' => $validValues['price'], 
        'contact' => $validValues['contact'],
        'bedrooms' => $validValues['bedrooms'],
        'size' => $validValues['size'],
          'date' => $_POST['date']
     ),'property_id = ' . $_POST['property_id']);
      
       $dbPropertyXsoldU = new Zend_DB_Table('properties_x_sold');
$record_id =  $dbPropertyXsoldU->update(array(
        
         'sold' => $_POST['status'],
         'agent_id' => $validValues['contact']
     ),'property_id = ' . $_POST['property_id']);
      
     //echo "updating the movie";
      if ($_POST['del_img'] == "on"){
          deleteImage($_POST['property_id']);
           header("location: index.php?action=proplist_admin"); 
      }
      else {
           uploadFiles($_POST['property_id']);
           header("location: index.php?action=proplist_admin");   
      }
      
    
 }
     
 } 
 else echo "form is NOT valid";
 
 }
 
