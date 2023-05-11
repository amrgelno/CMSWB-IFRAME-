<!-- Use downloaded version of Bootstrap -->

  <ol class="carousel-indicators">
  <?php

$select1="SELECT * from slider " ;
$query1=$this->connectF()->query($select1);

while($column=mysqli_fetch_object($query1)){
	
	$slides=$column->Image;
	
	if (! empty($slides)) {
	?>        
   
   <li data-target="#theCarousel" data-slide-to="<?php echo $column->ID; ?>" >  </li >
  
  
    <?PHP
    }
    }
    ?>
  </ol > 
<?php

$select_slide="SELECT * from slider where ID = (select Min(id) from slider)" ;
$query_slide=$this->connectF()->query($select_slide);

while($column=mysqli_fetch_object($query_slide)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
	?>        
    <div class="carousel-inner">
    <div class="item active" >
    <div class ="slide1"><img src="IMG/<?PHP echo $slides ?>"  loading='lazy' class="Image"  /></div>
    <div class="carousel-caption"><Font size='5px'> <?php echo $column->title; ?> </Font> </div>     
    </div>
    <?PHP
    }
    }
    ?>
    <?php

$select_slide2="SELECT * FROM slider where ID > (select Min(id) from slider)  " ;

$query_slide2=$this->connectF()->query($select1);

while($column=mysqli_fetch_object($query_slide2)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
	?>        
    <div class="item">
    <div class="slide2"><img src="IMG/<?PHP echo $slides ?>" loading='fast' class="Image"  /></div>
    <div class="carousel-caption"><Font size='5px'> <?php echo $column->title; ?> </Font> </div> 
     </div>     
    <?PHP
    }
    }
    ?>
      </div>      
      
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>



