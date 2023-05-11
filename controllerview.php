
<?php

include("connect.php");

class controllerview extends  condb{

public function sql(){

  $pg_id=$_POST['pg_id'];
  $slider=$_POST['slider'];

?>

   
new Vue({
	   
       el: "#vueapp",                          // Data Centre
            
          data: {               // reterive data  with  php line

            <?php  

$includeslider=$this->connectF()
->query("SELECT  *  from  slider   where   $slider =  $pg_id  ");

if($column=mysqli_fetch_object($includeslider)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
		?>

  embed_slider:"require_once('slider.php')",   //objectdata

  <?php
}
}
$query2=$this->connectF()
->query("SELECT * from  slider ");

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

//           



}


        })
   
       




<?php
}
}

$use= new controllerview();
$use->connectF();
$use->sql();
?>
