
<?php

error_reporting(0);

$select_text="select * from cover where cover_id='$pg_id' OR cover_id='$NO_ID'  ";

$query_cover=$this->connectF()->query($select_text) ;
while($column=mysqli_fetch_object
($query_cover)){
	
        $photo=$column -> Cover_Name;
	
if(!empty($photo)){
	?>			
        <section class="cover" style="background-image:url('IMG/<?php echo $photo   ?>');  
        ">	
       </section>
        <?PHP
        
}
}
?>

<?php  

$select1="SELECT submenu.sub1menu , submenu.ID ,   slider.title ,  slider.Image  ,   slider.ImageName  
FROM  submenu  LEFT JOIN    slider  ON  submenu.ID = slider.slide_id  where    slider.slide_id =  '$pg_id' OR slider.slide_id='$NO_ID'   ";
$query1=$this->connectF()->query("$select1");

while($column=mysqli_fetch_object($query1)){
	
	$slides=$column -> ImageName;
	
	if (! empty($slides)) {
		
?>
<section class="slider col-lg-12 col-xs-12 col-md-12 col-sm-12" > 
<div class="sliderimg col-lg-12 col-xs-12 col-md-12 col-sm-12"><!--str slider img -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">
  <!-- Define how many slides to put in the carousel -->
 
  <!-- Define the text to place over the image -->
  <div class="carousel-inner">
<?php  
$select1="SELECT submenu.sub1menu , submenu.ID ,   slider.title ,  slider.Image  ,   slider.ImageName  
FROM  submenu  LEFT JOIN    slider  ON  submenu.ID = slider.slide_id  where    slider.slide_id =  '$pg_id'  OR slider.slide_id='$NO_ID'  ";
$query1=$this->connectF()->query(
"$select1");

while($column=mysqli_fetch_object($query1)){
	
	$slides=$column -> ImageName;
	
	if (! empty($slides)) {
	    
include("slider.php");
?>
<!--
<input type="submit"  value="calclu"  name="calclu"  class="calclu">
<input type="close"   value="x"  name="close"  class="close">
-->
<?php
}
}
?>

</div>
  </div>
  <!-- Set the actions to take when the arrows are clicked-->
  <a class="left carousel-control" href="#theCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left">  </span>
  </a>
  <a class="right carousel-control" href="#theCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div></section>
<?php
	}
}
?>

<div style"clear:both;">    </div>
<?php

$select="select * from marque Where News_id ='$pg_id' OR News_id ='$NO_ID'";
$Newsquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object
($Newsquery)){
$News=$column -> News;
if (!empty($News)) {
?>
<section class="marque">
<div class="news"> top news </div>
<marquee  direction="up" behavior="scroll"   bgcolor="#CCCCCC"    scrollamount="1" font-size="25px"  width= "100%"  height="20px">
<div align="center">
<?php

$select="select * from marque Where News_id ='$pg_id' OR News_id ='$NO_ID'";
$Newsquery=$this->connectF()->query(
$select);
while($column=mysqli_fetch_object($Newsquery)){
$News=$column -> News;
if (!empty($News)) {
?>
<a><?php echo  $News ; ?></a>
<br /><br />
<br /> 
<?php    
	}
        }	
?>
</div>     			                 
</marquee>	    
</section>
<?php    
	}
        }	
?>

<section class="fultopic">
<!--<div class="windows" >        </div>-->  
<?php
$SELECT="SELECT submenu.sub1menu , submenu.ID , paragraph.Paragraph  
FROM submenu LEFT JOIN paragraph
ON submenu.ID = paragraph.Paragraph_id where submenu.ID = '$pg_id' OR submenu.ID ='$NO_ID'";
$query=$this->connectF()->query(
$SELECT);
while($column=mysqli_fetch_object($query)){
$Para=$column -> Paragraph;	
	if (! empty($Para)) {
?>

  
<div class="content ">
<?php echo $Para  ?></div>
<?php
}
}
?>

<div class="static_box">  

<?php
$selectu="select *  from   static Where static_id ='$pg_id' OR static_id ='$NO_ID' ORDER BY  static.ID ASC ";
$staticquery=$this->connectF()->query($selectu);
while($column=mysqli_fetch_object($staticquery)){
    $headline=$column -> static_Name;
	if (!empty ($headline)){
    ?>
    
    <div class="headline  col-sm-7 col-md-6  col-lg-7"> <h1><?php echo  $headline ?>    </h1>  </div>
    
    <?php
    }
    ?>
    
    <?php
	$photo=$column -> ImageName;
	if (!empty ($photo)){
		?>  
          <div class="FRAME_static">
          <div class="img1_static">
		
<img src="IMG/<?PHP echo $photo ?>" class="front_static"/>

<div class="title_static">
    
   <span class="title_s"> <?php echo  $column -> title
 ?>  </span>  <br/>
 <span class="Number_static"> <?php echo  $column -> static_Num
 ?> </span>

    <!--<input  type="hidden"     value="<?php echo $column -> ID
?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column -> title ?> </button>-->
		</div>
		</div>
                </div>
		<?php
        
	}
	}
        
?>
</div>

          
   <div class="categories">  

<?php
$select="select submenu.sub1menu  , box.title  , box.ImageName ,box.ID, box.cat_Name
From submenu LEFT JOIN  box   
ON submenu.ID = box.Box_id 
Where  box.Box_id ='$pg_id'  OR   box.Box_id ='$NO_ID' ORDER BY  box.ID ASC ";
$boxquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object($boxquery)){
    $headline=$column -> cat_Name;
	if (!empty ($headline)){
    ?>
    
    <div class="headline  col-sm-7 col-md-6  col-lg-7 "> <h1><?php echo  $headline ?>    </h1>  </div>
    
    <?php
    }
    ?>
    
    <?php
	$photo=$column -> ImageName;
	if (!empty ($photo)){
		?>  
          <div class="FRAME">
          <div class="imgb<?php echo $column -> ID ?>">
		
<img src="IMG/<?PHP echo $photo ?>" class="front"/>

<div class="titleb<?php echo $column -> ID ?>">


<a href="Blog?box_ID=<?php echo $column -> ID?>"  id='linker' ><?php echo  $column -> title ?></a>

    <!--<input  type="hidden"     value="<?php echo $column -> 
ID
?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column -> 
title
 ?> </button>-->
		
            
		</div>
		</div>
                </div>
                
                         <script>
	 
$(document).ready(function(e) {
    $('.imgb<?php echo $column -> ID ?>').hover(function(){
		$('.titleb<?php echo $column -> ID?>').fadeToggle();
		$('.titleb<?php echo $column -> ID?>').css({animation:'drive 2s  infinite 1s ease-out', },2000)
	});
});	
</script>                        
                
		<?php
        
	}
	}
        
?>

</div>
<div class="topic">  
<?php  /*
$SELECT="SELECT *  from topic where topic.content_id  ='$pg_id' OR topic.content_id  = '$NO_ID' ";
$query=$this->connectF()->query(
$SELECT);
while($column=mysqli_fetch_object
($query)){
	$photo=$column -> 
ImageName
;
	if (! empty($photo)) { 
	?>
   
<div class="img">

<img src="IMG/<?PHP echo $photo ?>" class="img"/>

</div>
<div class="text">
<a href="Blog?Topic_ID=<?php echo $column -> 
ID
?>"><?php echo $column->
subject
?></a>
<!--<?php echo $column->
subject
?>
<?Php echo '<br/>' ?>
<?php echo $column->
content
?>
</div> 	

 <DIV CLASS="topic_FRAME" >
          
          <div class="topic_div">

<img src="IMG/<?PHP ECHO $photo ?>"   class="img_topic"  />  


<div class="title_topic" style="font-size:25px;"><!--<a href="Blog?box_ID=< /*?phpecho $column -> 
ID
?/>"  id='linker' ></a>

<?php echo $column->
subject
?>

<?Php echo '<br/>' ?>
<?php echo $column->
content
?>

    <!--<input  type="hidden"     value="<?php echo $column -> 
ID
?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column -> 
title
 ?>  </button>
		</div>
		</div>
                </DIV> -->


<?php
}
}*/
?>
<?php
$SELECT="SELECT *  from topic where topic.content_id  ='$pg_id' OR  topic.content_id  = '$NO_ID' ";
$query=$this->connectF()->query($SELECT);
while($column=mysqli_fetch_object
($query)){
	$photo=$column -> ImageName;
	if (! empty($photo)) { 
	?>
    <div class='topic-FRAME'>
<div class="img">

<img src="IMG/<?PHP echo $photo ?>" class="img"/>

</div>
<div class="text">
<a href="Blog?Topic_ID=<?php echo $column -> ID ?>"><?php echo $column->subject ?></a>
<?php echo $column->subject ?>
<?Php echo '<br/>' ?>
<?php echo $column->content ?>
</div></div>	
<?php
}
}
?>
</div>

<div class="v_categories">  
<?php
$select="select submenu.sub1menu  , video.title  ,  video.ID, video.cat_Name   ,  video.VIDOName
From submenu LEFT JOIN video   
ON submenu.ID = video.VIDO_ID
Where  video.VIDO_ID ='$pg_id'  OR video.VIDO_ID ='$NO_ID'  ORDER BY  video.ID ASC";
$VIDOquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object($VIDOquery)){
    $headline=$column -> cat_Name;
	if (!empty ($headline)){
    ?>
    
    <div class="Vheadline  col-sm-7 col-md-6  col-lg-7"> <h1><?php echo  $headline ?>    </h1>  </div>
    
   <?php
    }
    ?>
    
    <?php
    
	$VIDO=$column -> VIDOName;
	if (!empty ($VIDO)){
		?> 
               <div CLASS="V_FRAME">
          
          <div class="Vido1">


<video src="VIDEO/<?PHP echo $VIDO ?>" 

class="V_front"  controls="controls" width="50%" height="240"  tabindex="0"    loop="loop"  tabindex="0" />  


<source  src="VIDEO/<?PHP echo $VIDO ?>"  type="video/mp4">

</video>

<div class="v_title"><!--<a href="Blog?box_ID=< /*?phpecho $column -> 
ID
?/>"  id='linker' ></a>-->

<?php echo  $column -> title ?>

    <!--<input  type="hidden"     value="<?php echo $column -> ID ?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column -> title
 ?>  </button>-->
		</div>
		</div>
                </div>
		<?php        
	}
	}
        
?>
</div>
<div class="close_res">x</div>
<div class="calclures">   </div>

<div class="clear"> </div>
<div class="form">
<?php
$select="select  *  from  forms  Where related_id ='$pg_id'  OR  related_id ='$NO_ID' ";
$formquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object($formquery)){
    
    echo  $column -> Form;    
    
	}
	
?>

</div>

  </section>
  







 

































