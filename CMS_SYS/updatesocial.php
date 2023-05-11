<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<title>Untitled Document</title>
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
$select="select * from  social where ID='$ID' ";
$sqls=$this->connectF()->query($select);
$NUM= mysqli_num_rows($sqls);
while($data= mysqli_fetch_object($sqls)){
?>
<form action="updatesocial.php" method="post" enctype="multipart/form-data">
   <INPUT TYPE='hidden'  name='ID'   value='<?php echo $data->ID?>'>
   <input type="url" name="url" placeholder="insertsocilalinkurl" />
    <input type="file"  name='upload'  value="search for a file" />
	<input type='submit' value='updata'  name='Edit'>
  </form>

 <?php
 }
 
 ?> 
 <?php
 
if($_POST['Edit']){	
       @$Image_path=($_FILES['upload']['tmp_name']);
       @$Image_name=$_FILES['upload']['name'];
	   $Image_type=$_FILES['upload']['type'];
	   @$dir=dirname(__FILES__)."/IMG/";
	    $url=$_POST['url'];
	  $updata="update  social SET  links='$url', social_icon='$Image_name'   WHERE  ID ='$ID'"  ;
	 $excuit=$this->connectF()->query($updata);	  
 if ($excuit)                {
	 
	 if($Image_type=='image/jpeg' or  $Image_type=='image/png' ){
	
      move_uploaded_file ($Image_path,$dir.$Image_name);

      $this->connectF()->query($updata);
	  
	 echo"social icon updated ok"; 

                                                                  }

else{
	
echo"<script> alert ('This not Image') </script>";	
	
    }
                            }
               }
			   }
}
$use= new updatesocial();
$use->connectF();
$use->sql();
?>
 
 
</body>
</html>