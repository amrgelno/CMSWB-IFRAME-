<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cms Estudio</title>
</head>
<style>

tr:nth-child(even){
	background:#09C;
	color:white;
}

</style>
<body>
<form  action='cat_boxtopic.php' method='post'>

<table width="500px" border="1">
	<tr class="trc">
    <td>sel</td>
    <td>cod</td>
    <td>title</td>
    <td> update</td>
    <td> insert topic </td>
    <td>Image</td>
    <td>Image name</td>
    <td>cat_type</td>
    <td><input type='submit' value='delete'  name='delete' class="delete" ></td>-->
  </tr>
 </form> 
  
<?php

include("connect.php");


class cat_boxtopic  extends  condb{        
  

public function sql(){
	
@$MAIN_ID=$_POST['MainM_ID'];
@$cat_type=$_POST['cat_type'];
$select="select * from  box  where  relatedtopic_id = '$MAIN_ID'  And  cat_type= '$cat_type'  ";

$sqls=$this->connectF()->query($select);
while($data= mysqli_fetch_object($sqls)){
	?>
 <tr>
 <td>
 <INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data->ID;?>'/> 
   <td> <?php echo  $data->ID;?></td>
     <td> <?php echo $data->title;?></td>      
</td>
<td>
<form action="<?php echo $php_self?>" method="post">
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data->ID;?>'/>
<INPUT TYPE='submit' name='update'  value='update' class='update'/>
</td>
</form>
<td><form action="boxtopic.php" method="post">
<INPUT TYPE='hidden' name='box_ID'  value='<?php echo $data->ID;?>'/>
<INPUT TYPE='submit' name='instopic'  value='inserttopic' class='insert'/>
</form>     </td>
<td>      

<img src="IMG/<?php echo $data->ImageName?>" style="width:50px; height:50px;"/>

 </td> 
 <td> <?php echo $data->ImageName;?>     </td>
 <td> <?php echo $data->cat_type;?>     </td>
 <?php                                    
  
  }

?> 
</tr>
</table>

<?php
 
if(@$_POST['delete']){	
#for($i=0;$i<=$counter;$i++){
	#$_SET=$_POST['checkbox'][$i];	
	@$_SET=$_POST['checkbox'];	
	@$DEL_ID=implode(",",$_SET);		
	  $DELETE="delete from box where ID IN ($DEL_ID)";
	  #$DELETE="delete from slider where ID = $_SET ";
	 $excuit=$this->connectF()->query($DELETE);
#	 }	  
 if ($excuit){
	echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;
 
	 echo"DELETED OK";
 }
                            }


}
}
$use= new cat_boxtopic();
$use->connectF();
$use->sql();

?>

</body>
</html>