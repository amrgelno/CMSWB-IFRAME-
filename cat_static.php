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
<form  action='cat_static.php' method='post'>

<table width="500px" border="1">
<tr class="trc">
<td>sel</td>
<td>cod</td>
<td>title</td>
<td> insert topic </td>
<td>update</td>
<td>Image</td>
<td>Image name</td>
<td>cat_type</td>
<td><input type='submit' value='delete'  name='delete' class="delete" ></td>-->
</tr>


<?php

include("connect.php");


class cat_static  extends  condb{        


public function sql(){


@$MAIN_ID=$_POST['MainM_ID'];
@$cat_type=$_POST['cat_static'];
$select="select * from  static  where static_id ='$MAIN_ID'  And  static_type= '$cat_type'  ";
$sqls=$this->connectF()->query($select);
while($data= mysqli_fetch_object($sqls)){
?>
<tr>
<td>
<INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data->ID;?>'/> 
</td>
<td> <?php echo  $data->ID;?></td>
 <td> <?php echo $data->title;?></td>      

<td><!--<form action="boxtopic.php" method="post">
<INPUT TYPE='hidden' name='box_ID'  value='<?php echo $data->ID;?>'/>
<INPUT TYPE='submit' name='instopic'  value='inserttopic' class='insert'/>
</form> --> </td>

<td>
<form action="updatestatic.php" method="post">
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data->ID;?>'/>
<INPUT TYPE='submit' name='update'  value='update' class='update'/>
</form>
</td>

<td>      

<img src="IMG/<?php echo $data->ImageName;?>" style="width:50px; height:50px;"/>

</td> 
<td> <?php echo $data->ImageName;?>     </td>
<td> <?php echo $data->static_type;?>     </td>
</tr>
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
  $DELETE="delete from static where ID IN ($DEL_ID)";
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
$use= new cat_static();
$use->connectF();
$use->sql();
?>

</body>
</html>