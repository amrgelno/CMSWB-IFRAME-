<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<title>CMS ESTUDIO</title>
</head>

<body>
<?php

include("con_db2.php");
$ID=$_POST['ID'];
$select="select * from  cover where ID='$ID' ";
$sqls=mysqli_query($connect,$select);
$NUM= mysqli_num_rows($sqls);
while($data= mysqli_fetch_array($sqls)){
?>
<form action="updatecover.php" method="post" enctype="multipart/form-data">
   <INPUT TYPE='hidden'  name='ID'   value='<?php echo $data['ID'];?>'>
    <input type="file"  name='uploadcover'  value="search for a file" />
	<input type='submit' value='updata'  name='Edit'>
  </form>

 <?php
 }
 
 ?> 
 
 <?php 
 $ID=$_POST['ID'];
 @$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['uploadcover']['tmp_name']);
 #$Image_path=addslashes (file_get_contents($_FILES['uploadcover']['tmp_name']));
  $cover_name=$_FILES['uploadcover']['name'];
  
if($_POST['Edit']){	
              
          move_uploaded_file ($path,$dir.$cover_name);
	  $updata="update  cover  SET   Cover_Name='$cover_name'  WHERE  ID ='$ID'"  ;
	 $excuit=mysqli_query($connect,$updata);
         
 if ($excuit){
	 
	 echo"updated OK";
 }
                            }

?>
 
 
</body>
</html>