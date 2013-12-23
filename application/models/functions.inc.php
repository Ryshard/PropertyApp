<?php
 define('UPLOAD_PATH', dirname(realpath(dirname(__FILE__))) . DIRECTORY_SEPARATOR .  "uploads" . DIRECTORY_SEPARATOR);

  define('IMG_SRC', 'application'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR);
function saveImageRecord($product_id, $imageName) {
	
	
	 $dbProperTable = new Zend_DB_Table('properties');
      $dbProperTable ->update(array('cover_img' => $imageName),'property_id = ' .$product_id);
	
	
	
	
}


function uploadFiles($product_id) {
    
 $imgPath = UPLOAD_PATH.$_FILES['uploadedfile']['name'];


 
 //$tempName = $_FILES['uploadedfile']['name'];
 
if (!is_file($imgPath))
{
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $imgPath ))
         {
	    saveImageRecord($product_id, basename( $_FILES['uploadedfile']['name']));
	 } 
        else
        {
	 echo "<p>There was an error uploading the file, please try again! </p>";
	}
    
}
 else {
     
    saveImageRecord($product_id, basename( $_FILES['uploadedfile']['name'])); 
 }


}


function clear_img_dir() {
    
    //get array with names of files 
    $sqlQuery = " SELECT cover_img from properties ";
$imagedirs = array();
	$result = mysql_query($sqlQuery);
    while($row = mysql_fetch_row($result)){
        $imagedirs[] = $row[0]; 
    }
        
        $path =  UPLOAD_PATH;
        //die($path);
        $dir = new DirectoryIterator($path);
       // print_r($imagedirs);
        

foreach ($dir as $file) {
    $imageInvalid = true;
    
    if ($file->isFile())
    {
    
    
       foreach ($imagedirs as $img) {
        if ($img == $file)
            $imageInvalid = false;
            
    }
    if ($file=='empty.png')
      $imageInvalid = false;  
    
    if ($imageInvalid == true){
        $filepath = $path.$file;
        //die($filepath);
        unlink ($filepath);
    }
   
    
    
    echo '<br />';
    
    
    }
    
} //end foreach
        
        
        
        
}


function deleteImage($propertyID){
     $dbProperTable2 = new Zend_DB_Table('properties');
     $dbProperTable2->update(array(
                'cover_img' => ''
             ),'property_id = '.$propertyID);
}



function get_image_src ($prod_id, $img_name){

$uploads_path = 'application'.DIRECTORY_SEPARATOR.'inc'.DIRECTORY_SEPARATOR. 'uploads';
$imagePath = $uploads_path;

              
                                       
               // print_r($images);
                
           $source= $imagePath.DIRECTORY_SEPARATOR.$img_name;
           //die($source);
           
           if (!is_file($source))
                {
               $source = $uploads_path.DIRECTORY_SEPARATOR.'empty.png';
           }
                   
           return $source; 
}




