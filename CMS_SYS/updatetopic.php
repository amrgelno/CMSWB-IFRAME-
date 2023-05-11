<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<title>CMS ESTUDIO</title>
</head>
<style>

tr:nth-child(even){
	background:#09C;
	color:white;
}

</style>
<body>
<?php

include("connect.php");


class updatesocial  extends  condb{        
  

public function sql(){
	
	
$ID=$_POST['ID'];
$select="select * from  topic where ID='$ID' ";
$sqls=$this->connectF()->query($select);
$NUM= mysqli_num_rows($sqls);
while($data= mysqli_fetch_object($sqls)){
?>
<form action="updatetopic.php" method="post" enctype="multipart/form-data">
   <INPUT TYPE='hidden'  name='ID'   value='<?php echo $data->ID;?>'>
   <input type="text" name="subject" placeholder="newsubject" />
	<textarea  name='textarea'   value='<?php echo $data->subject;?>'></textarea>
    <input type="file"  name='upload'  value="search for a file" />
	<input type='submit' value='updata'  name='Edit'>
  </form>

 <?php
 }
 
 ?> 
 <?php 
 
               @$dir=dirname(__FILES__)."/IMG/";
               @$path=($_FILES['upload']['tmp_name']);
               #@$Image_path=addslashes (file_get_contents($_FILES['upload']['tmp_name']));
               $Image_name=$_FILES['upload']['name'];
	       $subject=$_POST['subject'];
	       $textarea=$_POST['textarea'];	
                
if($_POST['Edit']){	
          move_uploaded_file ($path,$dir.$Image_name); 
	  $updata="update  topic SET  subject='$subject', content='$textarea'  , ImageName='$Image_name'  WHERE  ID ='$ID'"  ;
	 $excuit=$this->connectF()->query($updata);	  

if ($excuit){
	 
	 echo"updated OK";
 }


                            }
							
							}
}
$use= new updatetopic();
$use->connectF();
$use->sql();

?>
 
 
</body>
</html>