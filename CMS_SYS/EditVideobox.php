<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="dash.css" rel="stylesheet" type="text/css" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS Estudio</title>
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
<form  action='EditVideobox.php' method='post'>

<table width="500px" border="1">
	<tr class="trc">
    <td>sel</td>
    <td>cod</td>
    <td>categories</td>
    <td> update</td>
    <td> select</td>
    <td><input type='submit' value='delete'  name='delete' class="delete" ></td>
    </tr>

<?php

include("connect.php");


class Editvideobox extends  condb{        
  

public function sql(){
	
	
$box_ID=$_POST['box_ID'];
$select="select * from video where related_id = $box_ID ";

$sqls=$this->connectF()->query($select);
while($data= mysqli_fetch_object($sqls)){

$cat_Name= $data['cat_Name'];


if(!empty ($cat_Name) ){
	?>
        
 <tr>	
 <td> <INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data['ID'];?>'/> </td>
 <input type='hidden'  name='MainM_ID'   value='<?php echo $data['related_id'];?>' >  
 <input type='hidden'  name='cat_type'   value='<?php echo $data['cat_type'];?>' >  
   <td> <?php echo  $data['ID']?></td>
         <form action="<?php echo $php_self ?>" method="post">
     <td><input type='text'  name='cat_type'   value='<?php echo $data['cat_type'];?>' >  </td>  
<td><input type='hidden'  name='cat_typeprev'   value='<?php echo $data['cat_type'];?>' >   
<!--<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $data['related_id'];?>'/>-->
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data['ID'];?>'/>
<INPUT TYPE='submit' name='upcat'  value='update' class='update'/>
</td>
</form>
<td><form action="cat_Vidobox.php" method="post">
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $data['related_id'];?>'/>
<INPUT TYPE='hidden' name='cat_type'  value='<?php echo $data['cat_type'];?>'/>
<INPUT TYPE='submit' name='selectcate'  value='selectcategories' class='insert'/>
</form></td>
</tr>
 <?php
 
  }
}
?>

</table>
 <?php
 
 @$related_id=$_POST['MainM_ID'];
  @$cat_type=$_POST['cat_type']; 
if(@$_POST['delete']){	
#for($i=0;$i<=$counter;$i++){
	#$_SET=$_POST['checkbox'][$i];	
	@$_SET=$_POST['checkbox'];	
	@$DEL_ID=implode(",",$_SET);		
	  $DELETE="delete from video where ID IN ($DEL_ID)";
          $del_cat="delete from video  where  related_id = '$related_id' And  cat_type='$cat_type'";
	  #$DELETE="delete from slider where ID = $_SET ";
	 $excuit=$this->connectF()->query(

$DELETE);
         $excuit=$this->connectF()->query(

 $del_cat);
#	 }	  
 if ($excuit){
 
	echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;
 
	 echo"DELETED OK";
 }
                            }

?>


<?php
include("con_db2.php");
@$MAIN_ID=$_POST['MainM_ID'];
$select="select * from VIDEO  ";
$sqls=$this->connectF()->query($select);
@$Box_id=$_POST['Box_id'];
@$ID=$_POST['ID'];
@$cat_type=$_POST['cat_type'];
@$cattypeprev=$_POST['cat_typeprev'];
$clear='<div class="clear">';
$cl_close='</div>';
$full_cat=$clear.$cl_close.$cat_type;

$upbox="update video  SET cat_Name='$full_cat'  ,  cat_type='$cat_type'      where  ID='$ID' ";
$upbox2="update video  SET   cat_type='$cat_type'     where   cat_type='$cattypeprev' ";

if($_POST['upcat']){	

$this->connectF()->query($upbox);
$this->connectF()->query($upbox2);
echo"updated OK";
echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;
	 }

}
}
$use= new Editvideobox();
$use->connectF();
$use->sql();
?>


















</body>
</html>
