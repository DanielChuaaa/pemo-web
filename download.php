<?php
if(!empty($_GET['file'])){ 
    // Define file name and path 
    $fileName = basename($_GET['file']); 
    $filePath = 'file/'.$fileName; 
 
    if(!empty($fileName) && file_exists($filePath)){ 
        // Define headers 
        header("Cache-Control: public"); 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$fileName"); 
 
        // Read the file 
        readfile($filePath); 
        exit; 
    }else{ 
        echo 'The file does not exist.'; 
    } 
}
?>