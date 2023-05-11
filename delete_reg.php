<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="dash.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعديل الاعضاء</title>
</head>

<body>
<table border="3px" style="font-size:30px;">
<tr class="src">
<td  style="font-size:20px; color:orange">   username          </td>
<td style="font-size:20px;  color:orange">   usertype         </td>
<td style="font-size:20px;  color:orange">   update         </td>
<td style="font-size:20px;  color:orange">   delete         </td>
</tr>
<?php
include("connect.php");


class purorder  extends  condb{        
  

public function sql(){
	
$sql="select * from  users";
$query= $this->connectF()->query($sql);
while($column=mysqli_fetch_object($query)){
?>
<tr>
<td>  <?php echo $column->username?>         </td>
<td>   <?php echo $column->user_TYPE?>         </td>
<td><form action="?page"    method="post">
<input type="hidden" name="ID" value="<?php echo $column->id?>" />
<select name="user_TYPE">
<option value="Admin">Admin</option>
<option  value="supervisor">supervisor</option>
</select>
<input type="submit" name="update" value="update" class="update" />
</form>
         </td>
         <td><form action="?page"    method="post">
<input type="hidden"  name="ID" value="<?php echo $column->id?>" />
<input type="submit" name="delete" value="delete" class="delete" />
</form>
         </td>
</tr>
<?php
}
?>
</table>
<?php

@$ID=$_POST['ID'];
$delete="delete  from  users  where  id=$ID ";
if(@$_POST['delete']){
 $this->connectF()->query($delete);	
echo"deleted ok";
echo'<meta http-equiv="refresh" content="1,url=delete_reg.php">';
}
?>
<?php

@$ID=$_POST['ID'];
@$usertype=$_POST['user_TYPE'];
@$update="update users Set  user_TYPE='$usertype'   where  id=$ID "; 
if(@$_POST['update']){
$query= $this->connectF()->query($update);
echo"updated ok";
echo'<meta http-equiv="refresh" content="1,url=delete_reg.php">';
}
}
}
$use= new purorder();
$use->connectF();
$use->sql();
?>
</body>
</html>
