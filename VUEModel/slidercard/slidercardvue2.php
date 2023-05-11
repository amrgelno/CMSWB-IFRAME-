
<?php  

$includeslider=$this->connectF()->query("SELECT  *  from  slider   where   $slider =  '$pg_id'  ");

if($column=mysqli_fetch_object($includeslider)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
		?>

  embed_slider:"<?php echo $column->$slider  ?>",   //objectdata

  <?php
}
}

?>



<?php  

$query2=$this->connectF()->query("SELECT * from  slider ");

while($column=mysqli_fetch_object($query2)){
	
	$slides=$column->Image;
	
	if (! empty($slides)) {
	?>        
   
   ID:'<?php echo $column->ID ?>',
  
    <?PHP
    }
    }
    
    ?>
  
  
<?php

$query_slide=$this->connectF()
->query("SELECT * from slider where ID = (select Min(id) from slider)");

while($column=mysqli_fetch_object($query_slide)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
	?>        
Minslide:'IMG/<?PHP echo $slides ?>',
Mintitle:'<?php echo $column->title; ?>',    
  
    <?PHP
    }
    }
    ?>
  


sliderB:[
<?php
$query_slide2=$this->connectF()
->query("SELECT * FROM slider where ID > (select Min(id) from slider)  ");

while($column=mysqli_fetch_object($query_slide2)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
	?>        
 {largeslide2:'IMG/<?PHP echo $slides ?>',
  largetitle2:'<?php echo $column->title ?>'},      
    <?PHP
    }
    }
    ?>
  ],

  slider:[
<?php
$query_slide2=$this->connectF()->query("SELECT * FROM slider ");

while($column=mysqli_fetch_object($query_slide2)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
	?>        
 {Case:'<?PHP echo $column->Case ?>',
  slide_id:'<?php echo $column->ID ?>'-1,
  slidetumb:'IMG/<?PHP echo $slides ?>',
  slideName:'Slide <?php echo $column->ID ?>'},      
    <?PHP
    }
    }
    ?>
  ],