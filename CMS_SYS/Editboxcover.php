<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="dash.css" rel="stylesheet" type="text/css" />    
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
<form  action='Editboxcover.php' method='post'>

<table width="500px" border="1">
	<tr class="trc">
    <td> #</td>
    <td> ID</td>
    <!--<td>  content</td>
    <td>subject</td>
    <td>       <td>-->
    <td> update      </td>
    <td>Image</td>
    <td>Image name</td>
    <td><input type='submit' value='delete'  name='delete' class='delete'></td>
  </tr>
 </form> 
  
<?php
include("connect.php");

class Editboxcover  extends  condb{        
  
public function sql(){
	
@$box_ID=$_POST['box_ID'];
$select="select * from  cover  where box_ID = $box_ID ";

$sqls=$this->connectF()->query($select);
#$counter=mysqli_num_rows($sqls);
while($data= mysqli_fetch_object($sqls)){
	?>
 <tr>	
 <td> <INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data->ID?>'/> </td>
   <td> <?php echo  $data->ID?></td>     
<td><form action="updatecover.php" method="post">
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data->ID?>'/>
<INPUT TYPE='submit' name='submit'  value='update' class='update' />
</form></td>


<td><img src="IMG/<?php echo  $data->Cover_Name?>" style="width:40px; height:40px;"/></td>
 
 <td><?php echo  $data->Cover_Name?> </td> 
 
 
 <?php
  
  }

?> 

</table>

 <?php
 
if(@$_POST['delete']){	
#for($i=0;$i<=$counter;$i++){
	#$_SET=$_POST['checkbox'][$i];	
	@$_SET=$_POST['checkbox'];	
	@$DEL_ID=implode(",",$_SET);		
	  $DELETE="delete from cover where ID IN ($DEL_ID)";
	  #$DELETE="delete from slider where ID = $_SET ";
	 $excuit=$this->connectF()->query(
$DELETE);
#	 }	  
 if ($excuit){
	echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;
 
	 echo"DELETED OK";
 }
                            }

}
}
$use= new Editboxcover();
$use->connectF();
$use->sql();
?>


</body>
</html>
