<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="dash.css" rel="stylesheet" type="text/css" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<title>CMS ESTUDIO</title>
</head>

<body>
<?php

include("connect.php");


class updatebox  extends  condb{        
  

public function sql(){
	
$ID=$_POST['ID'];
$select="select * from  box where ID='$ID' ";
$sqls=$this->connectF()->query($select);
$NUM= mysqli_num_rows($sqls);
while($data= mysqli_fetch_object($sqls)){
?>

<form action="updatebox.php" method="post" enctype="multipart/form-data">
   <INPUT TYPE='hidden'  name='ID'   value='<?php echo $data->ID;?>'>
   <input type="text" name="boxtitle" placeholder="newsubject" />
    <input type="file"  name='boxshow'  value="search for a file" />
	<input type='submit' value='updata'  name='Edit'  >
  </form>

 <?php
 }
 
 ?> 
 
 
 
 <?php
 @$dir=dirname(__FILES__)."/IMG/";
 @$path=($_FILES['boxshow']['tmp_name']);
 #@$Image_path=addslashes (file_get_contents($_FILES['boxshow']['tmp_name']));
 $Image_name=$_FILES['boxshow']['name'];
 $boxtitle=$_POST['boxtitle'];
 
if($_POST['Edit']){	
          move_uploaded_file ($path,$dir.$Image_name);
          
	  $updata="update  box  SET  title='$boxtitle'  , ImageName='$Image_name'  WHERE  ID ='$ID'"  ;
	 $excuit=$this->connectF()->query($updata);
         
 if ($excuit){
	 
	 echo"updated OK";
 }
                            }
}
}
$use= new updatebox();
$use->connectF();
$use->sql();

?>
 
 
</body>
</html>