<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, ">
<link href="CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
<title>main menu and submnu</title>
</head>
<body >
<h1> <img src="ICON/377-3777708_big-data-icon-connection-icon-free-hd-png.png" width="50px" height="50px" /> Add Main Menu    أضافة القوائم الرئيسية  </h1>
<form action="MaiinM.php" method="post" enctype="multipart/form-data">
   <!-- <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID?>">-->
    <input type="text" name="Maintitle"    placeholder="اضافة قائمة" required>
    <br><label>Menu icon:</label><input type="file"  name='upload'   value="search for a file" />
    <input type="SUBMIT" name="ADD" VALUE="ADD" class="Mainbt1" >
    </form>
    <br/> <br/>
    <div id="MEnutb">
<table width="200" border="1" >
<tr class="trc">
    <td>ID</td>
    <td>MAIN MENU</td>
    <td>Menuico</td>
     <td>UPDATE</td>
     <td>ADDSUBMENU</td>
     <td>content</td>
     <td>DELETE</td>
     <td>INSERT TOPIC </td>
  </tr>
<?php
include("connect.php");

class menu extends condb{

function sql(){
$select="select * from submenu WHERE ISNULL (parent_id) ORDER BY  ID ASC";
#$excuite=mysqli_query($connect,$select);

$excuite=$this->connectF()->query($select);



while($column=mysqli_fetch_object($excuite)){

?>
<form action="MaiinM.php" method="post"  enctype="multipart/form-data"  >
  <tr>
  
    <td><?PHP echo $column->ID;?></td>
     
    <td>
    <input type="text" name="SUBMENU" VALUE="<?PHP echo $column->sub1menu;?>" id="sub1menu">
    
   </td>
   
    <td>
       <img src="IMG/<?php echo $column->submenuico;?>" style="width:40px; height:40px;"/> 
       <input type="file"  name='upload'   value="search for a file"  style="width:85px;"  />
         <input type="SUBMIT" name="DEL_ICON" VALUE="DELETEICON" >
    </td> 
    
     <td>
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID;?>">
    <input type="SUBMIT" name="UPDATE" VALUE="UPDATE" class="update">
    </form>
        </td>
    <td><form action="SUBM.php" method="post">
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID;?>">
    <input type="SUBMIT" name="SELECT" VALUE="SELECT" class="select">
    </form>
    </td>
     <td>
     <a href="index.php?MainM_ID=<?php echo $column->ID;?>">view content</a>
    </td>
     <td>
    <form action="MaiinM.php" method="post">
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID?>"  >
    <input type="SUBMIT" name="DELETE" VALUE=" " class="delete">
    </form>
    </td>
    <td>
    <form action="newtopic.php" method="post">
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID?>">
    <input type="SUBMIT" name="INSERT" VALUE=" " class="insert" >
    </form>
    </td>
        </tr> 
        </td>
        
        
 
<?PHP
}
?>   
<?php
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['upload']['tmp_name']);
@$Image_name=$_FILES['upload']['name'];
@$MainM_title=$_POST['Maintitle'];
@$Image_type=$_FILES['upload']['type'];
$insert="insert into submenu (sub1menu,submenuico) VALUES ('$MainM_title','$Image_name')";
if(@$_POST['ADD']){
if(!empty($Image_name)){    
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )  { 
move_uploaded_file ($path,$dir.$Image_name);    
#mysqli_query($connect,$insert);

$this->connectF()->query($insert);
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

echo"OK THE ITEM WAS ADD ";
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';    
}          
}
?>
<?php

$MainM_ID=@$_POST['MainM_ID'];
$DELETE="DELETE FROM submenu  WHERE ID=$MainM_ID ";


if(@$_POST['DELETE']){

#mysqli_query($connect,$DELETE);
$this->connectF()->query($DELETE);
echo"OK THE ITEM WAS deleted ";
echo'<meta http-equiv="refresh"  content="1;url=MaiinM.php"/>';
}
?>
<?php
@$Image_type=$_FILES['upload']['type'];
@$MainM_ID=$_POST['MainM_ID'];
@$SUBMENU=$_POST['SUBMENU'];
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['upload']['tmp_name']);
@$Image_name=$_FILES['upload']['name'];
$emptyimg=NULL;
/*$Image_size=$_FILES['upload']['size'];  // bits size*/
@$Image_type=$_FILES['upload']['type'];
$emptyimg=NULL;
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
</table>
</div>
<br />
<br />
<br />

<div class="navsetting"><br />
<h1> <img src="ICON/DISPLAY22.png" width="50px" height="50px" />Add style to menu     اضافة القائمة الرئيسية والفرعية </h1>
<br />
<form action="MaiinM.php"  name="navsetting"  method="post">
<Label> Add  Main color menu </Label><input type="color"  name="navcolor"/>
<br />
<br />
<br />
<Label> Add Font type</Label>
<select name="Addfont">
<option value="Verdana, Geneva, sans-serif">   Verdana, Geneva, sans-serif         </option>
<option  value="Georgia, Times New Roman, Times, serif">    Georgia, Times New Roman, Times, serif       </option>
<option value="Courier New, Courier, monospace">    Courier New, Courier, monospace       </option>
<option value="Arial, Helvetica, sans-serif">   Arial, Helvetica, sans-serif        </option>
<option value="Tahoma, Geneva, sans-serif">   Tahoma, Geneva, sans-serif        </option>
<option value="Times New Roman, Times, serif">   Times New Roman, Times, serif        </option>
<option value="Palatino Linotype, Book Antiqua, Palatino, serif">    Palatino Linotype, Book Antiqua, Palatino, serif       </option>
<option value="Lucida Sans Unicode, Lucida Grande, sans-serif">  Lucida Sans Unicode, Lucida Grande, sans-serif         </option>
<option value="MS Serif, New York, serif">  MS Serif, New York, serif         </option>
<option value="Comic Sans MS, cursive">   Comic Sans MS, cursive         </option>
</select>
<Label> Add Font size</Label>
<select name="Addsize">
<option value="medium ">   medium        </option>
<option  value="small">   small       </option>
<option value="large">    large      </option>
</select>
<Label> Add Font style </Label>
<select name="Fontstyle">
<option value="normal">   normal        </option>
<option  value="italic">  italic       </option>
<option value="oblique ">    oblique       </option>
</select>
<Label> Add fontcolor menu </Label><input type="color"  name="Fontcolor"/>
menu width:<input type="text"  placeholder="set a pixel value"  name="width" />
menu height:<input type="text"  placeholder="set a pixel value"  name="height" />
<Label> Add sub menu color  </Label><input type="color"  name="subcolor"/>
<Label> Add Dropmenu color  </Label><input type="color"  name="Dropmenu"/>
<input type="submit"  value="ok" name="ok"   /> 
</form>

<?php
@$navcolor=$_POST['navcolor'];
@$Fontcolor=$_POST['Fontcolor'];
@$FontType=$_POST['Addfont'];
@$FontSIZE=$_POST['Addsize'];
@$Fontstyle=$_POST['Fontstyle'];
@$width=$_POST['width'];
@$height=$_POST['height'];
@$subcolor=$_POST['subcolor'];
@$Dropmenu=$_POST['Dropmenu'];
$sqli="insert into view (FontType,Fontsize,ulcolor,Fontstyle,Fontcolor,width,height,sub1color,sub2color) VALUES ('$FontType','$FontSIZE','$navcolor','$Fontstyle','$Fontcolor','$width','$height','$subcolor','$Dropmenu')";
if(@$_POST['ok']){
#mysqli_query($connect,$sqli);
$this->connectF()->query($sqli);   

echo"done";
}
?>


<?php
}
}
$use=new menu();
$use->connectF();
$use->sql();
?>

</div>
</body>
</html>