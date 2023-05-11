<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="dash.css" rel="stylesheet" type="text/css" />    
<meta name="viewport" content="width=device-width, ">
<link href="CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
<title>main menu and submnu</title>
</head>

<body>
<h1> ADD & edit submenu </h1>
<div id="MEnutb">
<table width="200" border="1" id="MEnu_tb">
<tr class="trc" >
    <td>ID</td>
    <td>SUBMENU</td>
    <td>Menuico</td>
     <td>UPDATE</td>
     <td>DELETE</td>
     <td> view content</td>
     <td>INSERT TOPIC </td>
      

  </tr>
  <?PHP
 
include("connect.php");

class menu extends condb{

function sql(){

$SUBM_ID=$_POST['SUBM_ID'];
$select="select * from submenu WHERE ID =$SUBM_ID"; 
#$excuite=mysqli_query($connect,$select);

$excuite=$this->connectF()->query($select);

while($column=mysqli_fetch_object($excuite)){ 
?>
<form action="DropDown.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID?>">
    <!--<input type="text" name="SUBM_ID" VALUE="<?PHP echo $column->parent_id?>">-->
    <input type="hidden" name="PARENT_ID" VALUE="0">
    <input type="text" name="Maintitle" placeholder="اضافة قائمة" required="required">
    <br><label>Menu icon:</label><input type="file"  name='upload'   value="search for a file" />
    <input type="SUBMIT" name="ADD" VALUE="ADD" class="Mainbt1" />
    </form>
<?php
$SID = $column->ID;
$select1="select *  from submenu WHERE SUBMENUID = $SID  ORDER BY  ID ASC ";
#$excuite1=mysqli_query($connect,$select1);
$excuite1=$this->connectF()->query($select1);


while($column=mysqli_fetch_object($excuite1)){

?>
<form action="DropDown.php" method="post"   enctype="multipart/form-data">
  <tr>
    <td><?PHP echo $column->ID?></td>
    <td>
    <input type="text" name="SUBMENU" VALUE="<?PHP echo $column->sub1menu?>">
   </td>
    <td>
       <img src="IMG/<?php echo $column->submenuico?>" style="width:40px; height:40px;"/> 
        <input type="file"  name='upload'   value="search for a file"  style="width:85px;"  />
         <input type="SUBMIT" name="DEL_ICON" VALUE="DELETEICON" >
    </td> 
    
       <td>
    <input type="hidden" name="DropDown" VALUE="<?PHP echo $column->ID?>">
    <input type="SUBMIT" name="UPDATE" VALUE="UPDATE" class="update" />
    </form>
    </td> 
    
     <td>
    <form action="DropDown.php" method="post">
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $SUBM_ID ?>">
    <input type="hidden" name="DropDown" VALUE="<?PHP echo $column->ID?>">
    <input type="SUBMIT" name="DELETE" VALUE="DELETE" class="delete" />
    </form>
    </td> 
    <td> <a href=index.php?MainM_ID=<?php echo $column->ID?>>view content</a>

    </td>
    <td>
    <form action="newtopic.php" method="post">
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID?>">
    <input type="SUBMIT" name="INSERT" VALUE="INSERT_TOPIC" class="insert" >
    </form>
    </td>
    
<?php
}
?>  
<?php
}
?>    

<?php
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['upload']['tmp_name']);
@$Image_name=$_FILES['upload']['name'];
@$Image_type=$_FILES['upload']['type'];
@$MainM_title=$_POST['Maintitle'];
@$MainM_ID=$_POST['MainM_ID'];
$SUBM_ID=$_POST['SUBM_ID'];
@$PARENT_ID=$_POST['PARENT_ID'];

$insert="insert into submenu (sub1menu,submenuico,SUBMENUID,parent_id) VALUES ('$MainM_title','$Image_name', '$MainM_ID',$PARENT_ID )";
$footer="update submenu Set footer='$MainM_ID'  where  ID ='$MainM_ID' ";
if(@$_POST['ADD']){
if(!empty($Image_name)){    
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )  { 
move_uploaded_file ($path,$dir.$Image_name);    
#mysqli_query($connect,$insert);
$this->connectF()->query($insert);
#mysqli_query($connect,$footer);
$this->connectF()->query($footer);

echo"OK THE ITEM WAS ADD ";
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';
}
else{
	
echo"<script> alert ('This not Image') </script>";	
		
          }
}
elseif(empty($Image_name)){
#mysqli_query($connect,$insert); 
$this->connectF()->query($insert);

#mysqli_query($connect,$footer);

$this->connectF()->query($footer);

echo"OK THE ITEM WAS ADD ";
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';    
}          
}
?>
<?php
$footer=NULL;
@$SUBM_ID=$_POST['DropDown'];
@$MainM_ID=$_POST['MainM_ID'];

$DELETE="DELETE FROM submenu  WHERE ID=$SUBM_ID ";
$delfoter="update submenu Set footer='$footer'  where  ID ='$MainM_ID' ";
if(@$_POST['DELETE']){
#@mysqli_query($connect,$DELETE);
$this->connectF()->query($DELETE);

#mysqli_query($connect,$delfoter);
$this->connectF()->query($delfoter);

echo"OK THE ITEM WAS deleted ";
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';
}
?>
<?php
@$MainM_ID=$_POST['DropDown'];
@$SUBMENU=$_POST['SUBMENU'];
$upadte="update submenu SET  sub1menu='$SUBMENU'   WHERE ID =$MainM_ID";
if(@$_POST['UPDATE']){
#mysqli_query($connect,$upadte);
$this->connectF()->query($upadte);

echo"OK THE ITEM WAS upadted ";
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';
}
?>
<?php
@$MainM_ID=$_POST['DropDown'];
@$SUBMENU=$_POST['SUBMENU'];
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['upload']['tmp_name']);
@$Image_name=$_FILES['upload']['name'];
$emptyimg=NULL;
/*$Image_size=$_FILES['upload']['size'];  // bits size*/
@$Image_type=$_FILES['upload']['type'];
$upadte="update submenu SET  sub1menu='$SUBMENU' , submenuico='$Image_name'  WHERE ID ='$MainM_ID' ";
$upadtec2="update submenu SET  sub1menu='$SUBMENU'   WHERE ID ='$MainM_ID' ";
$upadtec3="update submenu SET  submenuico='$emptyimg'   WHERE ID ='$MainM_ID' ";
if(@$_POST['UPDATE']){
    if(!empty($Image_name)){
    if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )  {
move_uploaded_file ($path,$dir.$Image_name);
#mysqli_query($connect,$upadte);
$this->connectF()->query($upadte);

echo"OK THE ITEM WAS upadted ";
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';
}
}
elseif(empty($Image_name)){
#mysqli_query($connect,$upadtec2);
$this->connectF()->query($upadtec2);
    
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';    
}
}
elseif(@$_POST['DEL_ICON']){
#mysqli_query($connect,$upadtec3);  
$this->connectF()->query($upadtec3);
  
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';    
}

?>
<?php
}
}
$use=new menu();
$use->connectF();
$use->sql();
?>

</table>
</div>

</body>
</html>