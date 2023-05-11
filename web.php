<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link   href="css/m.php"  type="text/css"  rel="stylesheet"/>
<link href="css/lg.php" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="div"> hellow my web page  </div>
<?php
$connect=mysqli_connect('127.0.0.1','root','root') or die (mysqli_error());
mysqli_select_db($connect,'nav');
$MAIN_ID=$_GET['MainM_ID'];
$select_text="select submenu.sub1menu , cover.cover FROM  submenu LEFT JOIN cover ON   submenu.ID = cover.cover_id where cover_id=$MAIN_ID";

$query_cover=mysqli_query($connect,$select_text) ;
while($column=mysqli_fetch_array($query_cover)){
	$photo=$column['cover'];
	
if(!empty($photo)){
		
		?>
        <div class="cover">
        <?
	echo'<img src="data:image/jpeg;base64,'.base64_encode($photo).'" class="Image"/>'; 
	?>
        </div>
        <?
}

}
?>
<br />
<br />
<br />
<br />

<?php  
$connect=mysqli_connect('127.0.0.1','root','root')or die (mysqli_error());
mysqli_select_db($connect,'nav');
$MAIN_ID=$_GET['MainM_ID'];
$select1="SELECT submenu.sub1menu , submenu.ID ,   slider.title ,  slider.Image  ,   slider.ImageName  
FROM  submenu  LEFT JOIN    slider  ON  submenu.ID = slider.slide_id  where    slider.slide_id =  $MAIN_ID   ";
$query1=mysqli_query($connect,"$select1");

while($column=mysqli_fetch_array($query1)){
	
	$slides=$column['Image'];
	
	if (! empty($slides)) {
		
?> 
<div class="sliderimg"><!--str slider img -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">
  <!-- Define how many slides to put in the carousel -->
 
  <!-- Define the text to place over the image -->
  <div class="carousel-inner"> 
<?php  
$connect=mysqli_connect('127.0.0.1','root','root')or die (mysqli_error());
mysqli_select_db($connect,'nav');
$MAIN_ID=$_GET['MainM_ID'];
$select1="SELECT submenu.sub1menu , submenu.ID ,   slider.title ,  slider.Image  ,   slider.ImageName  
FROM  submenu  LEFT JOIN    slider  ON  submenu.ID = slider.slide_id  where    slider.slide_id =  $MAIN_ID ";
$query1=mysqli_query($connect,"$select1");

while($column=mysqli_fetch_array($query1)){
	
	$slides=$column['Image'];
	
	if (! empty($slides)) {
		
?> 
  <div class="item" >
  <div class="item active" >
  <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($slides).'"  class="Image"" />';?>";
    <div class ="slide1">            
    </div>
        <div class="carousel-caption"></div>
</div>
    </div>
<? 
}
}
?> 
  </div>
  </div> 
  <!-- Set the actions to take when the arrows are clicked -->
  <a class="left carousel-control" href="#theCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"> </span>
  </a>
  <a class="right carousel-control" href="#theCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div></div>
<?
	}
}
?>
<?php
$connect=mysqli_connect('127.0.0.1','root','root')or die (mysqli_error());
mysqli_select_db($connect,'nav');
$MAIN_ID=$_GET['MainM_ID'];
$SELECT="SELECT submenu.sub1menu , submenu.ID , Paragraph.Paragraph  
FROM submenu LEFT JOIN Paragraph
ON submenu.ID = Paragraph.Paragraph_id where submenu.ID = $MAIN_ID";
$query=mysqli_query($connect,$SELECT);
while($column=mysqli_fetch_array($query)){
?>
<div class="headline"><h1>
<?php echo $column["Paragraph"]?>
</h1>
</div>	
<?
}
?>
<?php
$connect=mysqli_connect('127.0.0.1','root','root') or die (mysqli_error());
mysqli_select_db($connect,'nav');
$MAIN_ID=$_GET['MainM_ID'];
$select="select submenu.sub1menu  , box.title  ,  box.Image ,box.ID 
From submenu LEFT JOIN  box   
ON submenu.ID = box.Box_id 
Where  box.Box_id =$MAIN_ID";
$boxquery=mysqli_query($connect,$select);
while($column=mysqli_fetch_array($boxquery)){
	$photo=$column['Image'];
	if (!empty ($photo)){
		?>
		<div class="img1">
		<?
echo'<img src="data:image/jpeg;base64,'.base64_encode($photo).'" class="front"/>'; 
?>

<div class="title"><a href="index.php?box_ID=<?php  echo $column['ID']?>">
        <?
echo  $column['title'];
?>
		</a></div>
		<?
		?>
		</div>
		<?
        
	}
	}
?>
<div class="clear"></div>
<div class="clear"></div>
<br />
<br />
<br />
<?php
$connect=mysqli_connect('127.0.0.1','root','root')or die (mysqli_error());
mysqli_select_db($connect,'nav');
$MAIN_ID=$_GET['MainM_ID'];
$SELECT="SELECT submenu.sub1menu , submenu.ID , topic.content , topic.Image ,topic.subject
FROM submenu LEFT JOIN topic
ON submenu.ID = topic.content_id where submenu.ID = $MAIN_ID";
$query=mysqli_query($connect,$SELECT);
while($column=mysqli_fetch_array($query)){
	$photo=$column['Image'];
	if (! empty($photo)) { 
	?>
<div class="img">
<?
echo'<img src="data:image/jpeg;base64,'.base64_encode($photo).'" class="img"/>'; 
?>
</div>
<?
?>
<div class="text"><?php echo $column["subject"]?>
<?Php echo '<br/>' ?>
<?php echo $column["content"]?>

</div>	
<?

}
}
?>
</body>
</html>