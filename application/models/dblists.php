<?php
//A generic class to get back lists
class dbLists {
    
    
    static public function getMovies() {
          $dbTable = new Zend_Db_Table('movie');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
   
    static public function getCinemas() {
         $dbTable = new Zend_Db_Table('cinema');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
    
}


?>
