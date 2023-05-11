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
<form  action='Editstatic.php' method='post'>

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


class Editstatic extends  condb{        


public function sql(){


@$MAIN_ID=$_POST['MainM_ID'];
$select="select * from  static  where  static_id = '$MAIN_ID' ";

$sqls=$this->connectF()->query($select);
while($data= mysqli_fetch_object($sqls)){

$static_Name= $data->static_Name;


if(!empty ($static_Name) ){
?>
<tr>	
<td> <INPUT TYPE='checkbox' name='checkbox[]'  value='<?php echo $data->ID ; ?>'/> </td>
<input type='hidden'  name='MainM_ID'   value='<?php echo $data->static_id;?>' >  
<input type='hidden'  name='cat_type'   value='<?php echo $data->static_type;?>' >   
<td> <?php echo  $data->ID?></td>
     <form action="Editstatic.php" method="post">
 <td><input type='text'  name='static_type'   value='<?php echo $data->static_type;?>' >  </</td>  
<td><input type='hidden'   name='static_typeprev'  value='<?php echo $data->static_type;?>' >   
<!--<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $data->static_id;?>'/>-->
<INPUT TYPE='hidden' name='ID'  value='<?php echo $data->ID;?>'/>
<INPUT TYPE='submit' name='upcat'  value='update' class='update'/>
</td>
</form>
<td>
<form action="Editstatic.php" method="post">
<INPUT TYPE='hidden' name='MainM_ID'  value='<?php echo $data->static_id;?>'/>
<INPUT TYPE='hidden' name='cat_static'  value='<?php echo $data->static_type;?>'/>
<INPUT TYPE='submit' name='selectcate'  value='selectcategories' class='insert'/>
</form>

</td>
</tr>
<?php

}
}
?>
</table></form>
<?php
@$static_id=$_POST['MainM_ID'];
@$static_type=$_POST['static_type'];
if(@$_POST['delete']){	
#for($i=0;$i<=$counter;$i++){
@$_SET=$_POST['checkbox'];	
@$DEL_ID=implode(",",$_SET);		
  $DELETE="delete  from  static where ID IN ($DEL_ID)";          
  $del_cat="delete from static  where  static_id = '$static_id' And  static_type='$static_type'";
 $excuit=$this->connectF()->query($DELETE);
     $this->connectF()->query($del_cat);
#	 }	  
if ($excuit){

echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;

 echo"DELETED OK";
}
                        }


?>

<?php
@$MAIN_ID=$_POST['MainM_ID'];
$select=" select * from  static ";
$sqls=$this->connectF()->query($select);
/*$static_id=$_POST['Box_id'];*/
@$ID=$_POST['ID'];
@$static_type=$_POST['static_type'];
@$static_typeprev=$_POST['static_typeprev'];
$clear='<div class="clear">';
$cl_close='</div>';
@$full_cat=$clear.$cl_close.$static_type;

@$upbox= "update  static   SET     static_Name='$full_cat'  ,  static_type='$cat_type'      where  ID='$ID' ";
$upbox2="update  static   SET     static_type='$static_type'     where   static_type='$static_typeprev' ";

if(@$_POST['upcat']){	

$this->connectF()->query($upbox);
$this->connectF()->query($upbox2);
echo"updated OK";
echo "<meta http-equiv='refresh'  content='1,url=MaiinM.php' />" ;
 }
}
}
$use= new Editstatic();
$use->connectF();
$use->sql();

?>

</html>
