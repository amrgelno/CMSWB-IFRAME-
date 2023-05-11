
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
   
  ID :'<?php echo $column->ID ?>',
  
    <?PHP
    }
    }
    
    ?>
  
  
sliderB:[
<?php
$query_slide2=$this->connectF()->query("SELECT * FROM slider ");

while($column=mysqli_fetch_object($query_slide2)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
	?>        
 {largeslide2:'IMG/<?PHP echo $slides ?>',
  largetitle2:'<?php echo $column->title ?>',
  slide_id:'currentDiv(<?php echo $column->ID ?>)'},      
    <?PHP
    }
    }
    ?>
  ],