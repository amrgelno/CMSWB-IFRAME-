<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<title>Untitled Document</title>
</head>

<body>
<?php

include("con_db2.php");

$ID=$_POST['ID'];
$select="select * from  slider where ID='$ID' ";
$sqls=mysqli_query($connect,$select);
$NUM= mysqli_num_rows($sqls);
while($data= mysqli_fetch_array($sqls)){
?>
<form action="updateslider.php" method="post" enctype="multipart/form-data">
   <INPUT TYPE='hidden'  name='ID'   value='<?php echo $data['ID'];?>'>
   <input type="text" name="slidetitle" placeholder="newsubject" />
    <input type="file"  name='uploadslide'  value="search for a file" />
	<input type='submit' value='updata'  name='Edit'>
  </form>

 <?php
 }
 
 ?> 
 
 
 <?php
       @$dir=dirname(__FILES__)."/IMG/";
       @$path=($_FILES['uploadslide']['tmp_name']);
       #@$Image_path=addslashes (file_get_contents($_FILES['uploadslide']['tmp_name']));
       @$Image_path=addslashes (file_get_contents($_FILES['uploadslide']['tmp_name']));
       $Image_name=$_FILES['uploadslide']['name'];
       $slidetitle=$_POST['slidetitle'];
       
if($_POST['Edit']){
          move_uploaded_file ($path,$dir.$Image_name);
	  $updata="update  slider SET  title='$slidetitle' , Image='$Image_path' , ImageName='$Image_name'  WHERE  ID ='$ID'"  ;
	 $excuit=mysqli_query($connect,$updata);	  
 if ($excuit){
	 
	 echo"updated OK";
 }
                            }

?>
 
 
</body>
</html>