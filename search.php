<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width,">
<link rel="shortcut icon" type="image/ico" href="logo.png"/>
<meta name="discription" content="lont-Group luxor-Branch">
<meta name="keyword" content="lont-Group luxor-Branch">
<meta name="author" content="amr">
<link href="css/xs.php" rel="stylesheet" type="text/css"/>
<link href="css/sm.php" rel="stylesheet" type="text/css"/>
<link href="css/lg.php" rel="stylesheet" type="text/css" />
<link href="css/md.php" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv=Content-Type content="text/html; charset=windows-1256">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type'text/css'>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/typed.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/typed.min.js.map"></script>
<script src="js/index.js"></script>
<title>Untitled Document</title>
<script src="js/jquery-1.11.0.min.js"></script>
<?php
include("con_db.php");
$search=$_POST['search'];
$sql="select * From topic where content like '%$search%' ";
$query=mysqli_query($connect,$sql); 
while($column=mysqli_fetch_array($query)){
	?>
<div class="img">
<?
echo'<img src="data:image/jpeg;base64,'.base64_encode($column['Image']).'" class="img"/>'; 
?>
</div>
<?
?>
<div class="text"><a href="index.php?Topic_ID=<?php echo $column['ID']?>"><?php echo $column["subject"]?></a>
<?Php echo '<br/>' ?>
<?php echo $column["content"]?>

</div>
<?	
}
?>
