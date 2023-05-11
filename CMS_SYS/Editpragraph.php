<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="dash.css" rel="stylesheet" type="text/css" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<form  action='Editpragraph.php' method='post'>

<table width="500px" border="1">
	<tr class="src">
    <td> #</td>
    <td> ID</td>
    <td> update </td>
    <td>title <td>
    <td><input type='submit' value='delete'  name='delete' class='delete'></td>
  </tr>
 </form> 
  
<?php
include("con_db2.php");
@$MAIN_ID=$_POST['MainM_ID'];
$select="select * from  paragraph where Paragraph_id = $MAIN_ID ";
$sqls=mysqli_query($connect,$select);
while($data= mysqli_fetch_array($sqls)){
	?>
 <tr>	
 <td> <INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data['ID'];?>'/> 
   <td> <?php echo  $data['ID']?></td>     
</td>
<td><form action="updatepragraph.php" method="post">
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data['ID'];?>'/>
<INPUT TYPE='submit' name='submit'  value='update' class="update"/>
</form></td>
<td><?php echo $data['Paragraph']?> </td>
<td>     </td>
<td>      </td> 

 
 <?php                                    
  
  }

?> 
</table>


 <?php
 
if(@$_POST['delete']){	
	@$_SET=$_POST['checkbox'];	
	@$DEL_ID=implode(",",$_SET);		
	  $DELETE="delete from paragraph where ID IN ($DEL_ID)";
	 $excuit=mysqli_query($connect,$DELETE);
	  
 if ($excuit){
	echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;
 
	 echo"DELETED OK";
 }
                            }


mysqli_close($connect);
?>


</body>
</html>
