<?php
  //  die(APPLICATION_PATH);
  //  error_reporting(E_ALL);
    set_include_path(APPLICATION_PATH . "/vendor/Smarty/libs" . PATH_SEPARATOR . get_include_path());
    set_include_path(APPLICATION_PATH . "/vendor" . PATH_SEPARATOR . get_include_path());
    set_include_path(APPLICATION_PATH . "/forms" . PATH_SEPARATOR . get_include_path());
    set_include_path(APPLICATION_PATH . "/models" . PATH_SEPARATOR . get_include_path());
  
   
    require_once('Zend/Loader.php');
    Zend_Loader::loadClass('Zend_Db_Table');
    Zend_Loader::loadClass('Zend_Registry');
    Zend_Loader::loadClass('Zend_Form');
    Zend_Loader::loadClass('Zend_View');
       
    $db = Zend_Db::factory('Pdo_Mysql', array(
        'host'=>'localhost',
        'username'=>'root',
        'password'=>'',
        'dbname'=>'property_app'
        ));
       
    Zend_Db_Table::setDefaultAdapter($db);
    
    require_once('dblists.php');

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","property_app");
    
    $link_id=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if($link_id) {
	
	//echo "Successful Connection";
} else {

	echo "UnSuccessful Connection: " . DB_HOST;
	EXIT;
}

if(mysql_select_db(DB_DATABASE,$link_id)) {
	//echo "<p>Connection to database successful </p>";
	//header("Location: http://www.ryanair.com");
} else {

	echo "<p>Connection to database failed  </p>";
}
?>
