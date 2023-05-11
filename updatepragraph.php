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
$select="select * from  paragraph where ID='$ID' ";
$sqls=mysqli_query($connect,$select);
$NUM= mysqli_num_rows($sqls);
while($data= mysqli_fetch_array($sqls)){
?>
<form action="updatepragraph.php" method="post" >
   <INPUT TYPE='hidden'  name='ID'   value='<?php echo $data['ID'];?>'>
   <textarea   name='updatetitle' value='<?php echo $data['Paragraph'];?>'></textarea>  
	<input type='submit' value='updata'  name='Edit'>
  </form>

 <?php
 }
 ?> 
 <?php
 
if($_POST['Edit']){	
       $ID=$_POST['ID'];
       $Paragraph=$_POST['updatetitle'];
	  $update="update  paragraph  SET   Paragraph='$Paragraph'  WHERE  ID ='$ID'"  ;
	 $excuit=mysqli_query($connect,$update);	  
 if ($excuit){	 
	 echo"updated OK";
 }
                            }

?>
 
 
</body>
</html>