<?php

error_reporting(0);

$select_text="SELECT *  from  cover  where  box_ID ='$pg_id'  OR  relatedtopic_id= '$pg_id'  ";

$query_cover=$this->connectF()->query($select_text) ;
while($column=mysqli_fetch_object($query_cover)){
	$photo=$column->Cover_Name;
	
if(!empty($photo)){
		
		?>
        <section class="cover">
        
        <img src="IMG/<?PHP echo $photo ?>"   class="Image"/>
	
        </section>
        <?php
}

}
?>
<div class="clear"> </div>

<div class="clear"> </div>

<br />
<br />
<br />
<br />


<?php  


$select1="SELECT  *  from  slider   where    box_ID ='$pg_id' OR slider.relatedtopic_id =  '$pg_id'   ";


$query1=$this->connectF()->query($select1);


while($column=mysqli_fetch_object($query1)){
	
	$slides=$column->ImageName;
	
	if (!empty($slides)) {
		
?> 
<section class="slider col-lg-12 col-xs-12 col-md-12 col-sm-12"> 
<div class="sliderimg col-lg-12 col-xs-12 col-md-12 col-sm-12"><!--str slider img -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">
  <!-- Define how many slides to put in the carousel -->
 
  <!-- Define the text to place over the image -->
  <div class="carousel-inner"> 
<?php  

$select1="SELECT  *  from  slider   where  box_ID =  '$pg_id'  OR slider.relatedtopic_id =  '$pg_id'     ";


$query1=$this->connectF()->query($select1);

while($column=mysqli_fetch_object($query1)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
		
 
  include("slider.php");
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
</div></section>
<?php
	}
}
?>

<div class="clear">  </div>
<section class="fultopic">
<?php


$SELECT="SELECT  * from   topic   where  box_ID = '$pg_id'  OR  relatedtopic_id = '$pg_id' ";

$query=$this->connectF()->query($SELECT);
while($column=mysqli_fetch_object($query)){
	$photo=$column->ImageName;
	if (!empty($photo)) { 
	?>
<div class="img">

<img src="IMG/<?PHP echo $photo ?>" class="img"/>

</div>

<div class="text">

<a href="index.php?Topic_ID=<?php echo $column->ID?>"><?php echo $column->subject?></a>
<!--<?php echo $column->subject?>-->
<?Php echo '<br/>' ?>
<?php echo $column->content?>
</div>	
<?php
}
}
?>

<div class="clear"> </div>

<?php
$SELECT="SELECT  *  from  paragraph  where  box_ID = '$pg_id' OR  relatedtopic_id  = '$pg_id'";
$query=$this->connectF()->query($SELECT);
while($column=mysqli_fetch_object($query)){
$Para=$column->Paragraph;
	if (! empty($Para)) {
?>
<div class="content">
<?php echo $column->Paragraph?>
</div>	
<?php
}
}
?>


<div class="categories">   

<?php
$select="SELECT   *  from box  Where  related_id ='$pg_id'  OR  relatedtopic_id ='$pg_id' ORDER BY  ID ASC ";                             
$boxquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object($boxquery)){
    $headline=$column->cat_Name;
	if (!empty ($headline)){
    ?>
    
    <div class="headline col-sm-10 col-md-8  col-lg-7 "> <h1><?php echo  $headline ?>    </h1>  </div>
    
    <?php
    }
    ?>
    
    <?php
	$photo=$column->ImageName;
	if (!empty ($photo)){
		?>  
          <div class="FRAME">
          <div class="img1">
		
<img src="IMG/<?PHP echo $photo ?>" class="front"/>

<div class="title"><a href="index.php?box_ID=<?php echo $column->ID?>"  id='linker' ><?php echo  $column->title ?></a>

    <!--<input  type="hidden"     value="<?php echo $column->ID?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column->title ?> </button>-->
		</div>
		</div>
                </div>
		<?php
        
	}
	}
        
?>     </div>

<div class="v_categories">  

<?php
$select="select  *  from  VIDEO   Where  related_id = '$pg_id'  OR  relatedtopic_id ='$pg_id'   ORDER BY  VIDEO.ID ASC";
$VIDOquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object($VIDOquery)){
    $headline=$column->cat_Name;
	if (!empty ($headline)){
    ?>
    
    <div class="headline col-sm-10 col-md-8  col-lg-7 "> <h1><?php echo  $headline ?>    </h1>  </div>
    
   <?php
    }
    ?>
    
    
    
    <?php
    
	$VIDO=$column->VIDOName;
	if (!empty ($VIDO)){
		?> 
               <div CLASS="V_FRAME">
          
          <div class="Vido1">


<video src="VIDEO/<?PHP echo $VIDO ?>" 

class="front"  controls="controls" width="50%" height="240"  tabindex="0"    loop="loop"  tabindex="0" />  


<source  src="VIDEO/<?PHP echo $VIDO ?>"  type="video/mp4">

</video>

<div class="v_title"><!--<a href="index.php?box_ID=< /*?phpecho $column->ID?/>"  id='linker' ></a>-->

<?php echo  $column->title ?>


     <FORM  action="index.php"   method="post" >
            <input  value="<?php echo $column->ID ?>" Name="MainM_ID" type="hidden" >
            <input  value="<?php echo $Email   ?>"   name="Email"  type="hidden" >
            <input  value="<?php echo $password   ?>" name="password"   type="hidden" >
             <input  value="<?php echo  $column->title ?>"   type="submit" style="background:none; border:none;"  >            
            </FORM>

    <!--<input  type="hidden"     value="<?php #echo $column->ID?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php #echo  $column->title ?>  </button>-->
		</div>
		</div>
                </div>
		<?php        
	}
	}
        
?>

<?php
$select="select * from  forms Where forms_id ='$MAIN_ID' OR  forms_id ='$pg_id' ";
$formquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object($formquery)){
    
    echo  $column->container ;    
    
	}
	
?>


</div>
</section>
<div class="close_res">x</div>
<div class="calclures">   </div>
 


 

