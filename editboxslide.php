<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cms Estudio</title>
</head>
<style type="text/css">
.job{
width:500px;
height:50px;
background:#0FF;
}

tr:nth-child(even){
	background:#09C;
	color:white;
}
</style>

<body>
<form  action='editboxslide.php' method='post'>

<table width="500px" border="1">
	<tr>
    <td> #</td>
    <td>  content</td>
    <td>subject</td>
    <td> update      <td>
    <td>       <td>
    <td>Image</td>
    <td>Image name</td>
    <td><input type='submit' value='delete'  name='delete'></td>
  </tr>
 </form> 
  
<?php
include("connect.php");

class Editboxslide  extends  condb{        
  

public function sql(){


$box_ID=$_POST['box_ID'];
$select="select * from  slider where box_ID =$box_ID ";

$sqls=$this->connectF()->query($select);
#$counter=mysqli_num_rows($sqls);
while($data= mysqli_fetch_object($sqls)){
	?>
 <tr>	
 <td> <INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data->ID?>'/> 
   <td> <?php echo  $data->ID?></td>
     <td> <?php echo $data->title?></td>      
</td>
<td><form action="updateslider.php" method="post">
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data->ID?>'/>
<INPUT TYPE='submit' name='submit'  value='update'/>
</form></td>
<td>     </td>
<td>     </td>
<td>      </td> 

<td><img src="IMG/<?PHP echo $data->ImageName?>"  style="width:40px; height:40px; "/> </td>
 

 <td> <?php echo $data->ImageName ?>     </td>
 
 <?php                                    
  
  }

?> 
</table>
 <?php
 
if($_POST['delete']){	
#for($i=0;$i<=$counter;$i++){
	#$_SET=$_POST['checkbox'][$i];	
	$_SET=$_POST['checkbox'];	
	$DEL_ID=implode(",",$_SET);		
	  $DELETE="delete from slider where ID IN ($DEL_ID)";
	  #$DELETE="delete from slider where ID = $_SET ";
	 $excuit=
$this->connectF()->query($DELETE);
#	 }	  
 if ($excuit){
	echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;
 
	 echo"DELETED OK";
 }
                            }

}
}
$use= new Editboxslide();
$use->connectF();
$use->sql();
?>


</body>
</html>
