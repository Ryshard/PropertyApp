<?php
session_start();
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
  

 require_once(APPLICATION_PATH .'/config/common.inc.php');
       
    // $dbTable = new Zend_Db_Table('movie');
    // $rows = $dbTable->fetchAll();
     
   //  foreach($rows as $row) {
         
        // print_r($row->toArray());
         
   //  }
    $date = date('Y-m-d');
 
   // die(get_include_path());
    set_include_path(APPLICATION_PATH. "/models" . PATH_SEPARATOR . get_include_path());
     
     
    include_once('smartymovies.inc.php');
     
      require_once('functions.inc.php');
   
      clear_img_dir();   
      
      
    $smarty = new Smarty_Movies();
    
     
    $smarty->assign('name','Property App');
$smarty->assign('date', $date);
    
    $smarty->assign('loggedIn',false);
    $loggedIn = false;
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==1) {
        
       $smarty->assign('loggedIn',true);  
     $loggedIn=true;
    }
    
   // $smarty->assign('page','page1');
       
    $pageAction = isset($_GET['action']) ? $_GET['action'] : 'home';
   //die($pageAction);
    switch($pageAction) {
        
        case 'addProperty':
            //die('loading here $pageAction');
            $row['property_id']=0;
            $row['address_1'] = '';
            $row['address_2'] = '';
            $row['city'] = '';
            $row['county']='';
            $row['price'] = '';
            $row['type'] = '';
            $row['contact'] = '';
            $row['bedrooms'] = '';
            $row['size'] = '';
            $row['cover_img'] = '';
            $row['date'] = $date;
            $row['sold'] = 0;
            $smarty->assign('row',$row);
            $smarty->assign('page','form_property.tpl');
            $smarty->assign('pageTitle','Add Property');
           $smarty->assign('uploads', IMG_SRC);
            break;
        
        case 'edit':
            //die('loading here $pageAction');
            
            $record_id = $_GET['id'];
            //$dbTable = new Zend_Db_Table('properties');
           //$row = $dbTable->fetchRow('property_id = ' . $record_id);
             $sql = ' ';
              $sql.= 'SELECT * From properties ';
              $sql.= ' INNER JOIN properties_x_sold ';
              $sql.= ' ON properties.property_id = properties_x_sold.property_id  ';
              $sql.= ' WHERE properties.property_id='.$record_id. ' ';
            $stmt = $db->query($sql);
            $rows = $stmt->fetchAll();
            $row = $rows[0];
            $smarty->assign('row',$row);
            $smarty->assign('page','form_property.tpl');
            $smarty->assign('pageTitle','Add Property');
           $smarty->assign('uploads', IMG_SRC);
            break;
        
           case 'proplist':
                 $search = array();
               if (!empty($_SESSION['search']['county']))
               $search['county'] = $_SESSION['search']['county'];
               else 
               $search['county'] = "";
               
                 if (!empty($_SESSION['search']['bedrooms']))
                 $search['bedrooms'] = $_SESSION['search']['bedrooms'];
                 else
                 $search['bedrooms'] = ""; 
                 
                                  
                 if (!empty($_SESSION['search']['city']))
                 $search['city'] = $_SESSION['search']['city'];
                 else
                 $search['city'] = "";
                 
                 if (!empty($_SESSION['search']['type']))
                 $search['type'] = $_SESSION['search']['type'];
                 else
                 $search['type'] = "";
                 
                 $smarty->assign('search',$search);
                 
               
                $dbTable = new Zend_Db_Table('properties');
                $rows = $dbTable->fetchAll();
                             
                $smarty->assign('rows',$rows);
                $smarty->assign('uploads', IMG_SRC);
                $smarty->assign('page','proplist.tpl');
                $smarty->assign('pageTitle','Property Listing');
           
             
            break;
        
          case 'proplist_admin':
               // $dbTable = new Zend_Db_Table('properties');
            //  $rows = $dbTable->fetchAll();
        
              $sql = ' ';
              $sql.= 'SELECT * From properties ';
              $sql.= ' INNER JOIN properties_x_sold ';
              $sql.= ' ON properties.property_id = properties_x_sold.property_id ';
        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll();
                
                $smarty->assign('rows',$rows);
                $smarty->assign('page','proplist_admin.tpl');
                 $smarty->assign('uploads', IMG_SRC);
                $smarty->assign('pageTitle','Property Listing | Admin');
             break;
       
           case 'delete':
            //die('loading here $pageAction');
            $prop_id = $_GET['id'];
               $smarty->assign('id', $prop_id);
            $smarty->assign('page','delete.tpl');
            $smarty->assign('pageTitle','Delete Property');
             break;
        
        
        default:
           
            if (!empty($_SESSION['loggedIn'])){
            $persona =  $_SESSION['user'];
                 }
            else {
            $persona = 'Stranger';}
         
           $message = "Well Hello, ".$persona;
           $smarty->assign('message',$message);
           
         $smarty->assign('page','index.tpl');
         $smarty->assign('pageTitle','Property App Home Page');
            
            break;
        
    }
  $smarty->display('master.tpl',$pageAction);

?>