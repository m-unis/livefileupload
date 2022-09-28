<?php
$old_name = $_FILES["file_to_upload"]["name"]; // The file name
$tmp = $_FILES["file_to_upload"]["tmp_name"]; 
   $new_name="doc_".rand().".".getExtenstion($old_name);
    if(uploadFile($tmp,$new_name,"/uploads/)){  //uploading files 
     
              echo "File has been Uploaded";
         
          } 
          
          
 function getExtenstion($filename){
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    return $ext;
}
          
          
 function uploadFile($tmp,$newName,$pathname){
    if(move_uploaded_file($tmp, $pathname.$newName)){
  return true;
}else{
  echo "Not Uploaded";
}


?>
