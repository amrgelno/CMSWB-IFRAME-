<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="dash.css" rel="stylesheet" type="text/css" />    
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


class updatevideo  extends  condb{        
  

public function sql(){
	
$ID=$_POST['ID'];
$select="select * from  VIDEO where ID='$ID' ";
$sqls=$this->connectF()->query($select);
$NUM= mysqli_num_rows($sqls);
while($data= mysqli_fetch_object($sqls)){
?>

<form action="updateVideo.php" method="post" enctype="multipart/form-data">
   <INPUT TYPE='hidden'  name='ID'   value='<?php echo $data->ID;?>'>
   <input type="text" name="videotitle" placeholder="newsubject" />
    <input type="file"  name='vidoshow'  value="search for a file" />
	<input type='submit' value='updata'  name='Edit'  >
  </form>

 <?php
 }
 
 ?> 
 
 
 <?php
       @$dir=dirname(__FILES__)."/VIDEO/";
       @$path=($_FILES['vidoshow']['tmp_name'][$i]);	
       #$video_path=addslashes (file_get_contents($_FILES['vidoshow']['tmp_name']));
       $video_name=$_FILES['vidoshow']['name'];
       $videotitle=$_POST['videotitle'];
 
if($_POST['Edit']){			
	  $updata="update video  SET  title='$videotitle' , VIDOName='$video_name'  WHERE  ID ='$ID'"  ;
	  move_uploaded_file ($path,$dir.$video_name);
	 $excuit=$this->connectF()->query($updata);
         
 if ($excuit){
	 
	 echo"updated OK";
 }
                            }
							
							
							}
}
$use= new updatevideo();
$use->connectF();
$use->sql();

?>
 
 
</body>
</html>