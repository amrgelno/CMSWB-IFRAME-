<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cms Estudio</title>
</head>
<style>

tr:nth-child(even){
	background:#09C;
	color:white;
}

</style>
<body>

<form  action='<?php echo $php_self?>' method='post'>

<table width="500px" border="1">
<tr class="trc">
<td>sel</td>
<td>cod</td>
<td>title</td>
<td> update</td>
<td> insert topic </td>
<td>Video</td>
<td>Video name</td>
<td>cat_type</td>
<td><input type='submit' value='delete'  name='delete' class="delete" ></td>
</tr>

</form> 

<?php

include("connect.php");


class cat_Vidobox  extends  condb{        


public function sql(){


$MAIN_ID=$_POST['MainM_ID'];
$cat_type=$_POST['cat_type'];
$select="select  *   from    VIDEO   where   related_id = '$MAIN_ID'   And   cat_type= '$cat_type' ";

$sqls=$this->connectF()->query($select);
while($data= mysqli_fetch_object($sqls)){
?>
<tr>	
<td> <INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data->ID;?>'/> 
<td> <?php echo  $data->ID?></td>
 <td> <?php echo $data->title?></td>      
</td>
<td><form action="updateVideo.php" method="post">
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data->ID;?>'/>
<INPUT TYPE='submit' name='submit'  value='update' class='update'/>
</form></td>
<td><form action="boxtopic.php" method="post">
<INPUT TYPE='hidden' name='box_ID'  value='<?php echo $data->ID;?>'/>
<INPUT TYPE='submit' name='instopic'  value='inserttopic' class='insert'/>
</form>     </td>
<td>      
<video src="VIDEO/<?PHP echo $VIDO ?>" 

class="front"  controls="controls" width="90%" height="50%"  tabindex="0"    loop="loop"  tabindex="0" />  


<source  src="VIDEO/<?PHP echo $data->VIDOName?>"  type="video/mp4">

</video>
</td> 
<td> <?php echo $data->VIDOName ?>     </td>
<td> <?php echo $data->cat_type ?>     </td>
<?php                                    

}

?> 
</tr>
</table>
<?php

if($_POST['delete']){	
#for($i=0;$i<=$counter;$i++){
#$_SET=$_POST['checkbox'][$i];	
$_SET=$_POST['checkbox'];	
$DEL_ID=implode(",",$_SET);		
  $DELETE="delete from VIDEO where ID IN ($DEL_ID)";
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
$use= new cat_Vidobox();
$use->connectF();
$use->sql();

?>


</body>
</html>