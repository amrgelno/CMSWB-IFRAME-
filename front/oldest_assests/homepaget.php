<div class="cover" style="         
    background-blend-mode: soft-light;'); 
    background-size: cover;
    background-attachment: fixed;
    background-position: center;">
                      
        </div>

<?php
$MAIN_ID=1;

$select_Cover="select  *  FROM   cover  where cover_id=$MAIN_ID";

#$query_cover=mysqli_query($connect,$select_text) ;

$query_cover=$this->connectF()->query($select_Cover);

while($column=mysqli_fetch_object($query_cover)){
	$photo=$column->Cover_Name;
	
if(!empty($photo)){
		
		?>       
        <script>
var cover="url('IMG/<?PHP ECHO $photo ?>'),linear-gradient(45deg, #cddc3942, #0dbee67a)";
 document.querySelector('.cover').style.backgroundImage=cover;
</script>                       
        <?php
}

}
?>


<?php  
$MAIN_ID=1;
$select_slide="SELECT submenu.sub1menu , submenu.ID ,   slider.title ,  slider.Image  ,   slider.ImageName  
FROM  submenu  LEFT JOIN    slider  ON  submenu.ID = slider.slide_id  where    slider.slide_id =  $MAIN_ID   ";
#$query1=mysqli_query($connect,"$select1");

$query_slide=$this->connectF()->query($select_slide);

while($column=mysqli_fetch_object($query_slide)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
		
?> 
<div class="slider col-lg-12 col-xs-12 col-md-12 col-sm-12">
<div class="sliderimg col-lg-12 col-xs-12 col-md-12 col-sm-12"><!--str slider img -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">
  <!-- Define how many slides to put in the carousel -->
 
  <!-- Define the text to place over the image -->
  <div class="carousel-inner">
<?php  
$MAIN_ID=1;
$select_slide="SELECT submenu.sub1menu , submenu.ID ,   slider.title ,  slider.Image  ,   slider.ImageName  
FROM  submenu  LEFT JOIN    slider  ON  submenu.ID = slider.slide_id  where    slider.slide_id =  $MAIN_ID   ";
#$query1=mysqli_query($connect,"$select1");
$query_slide=$this->connectF()->query($select_slide);
while($column=mysqli_fetch_object($query_slide)){
	
	$slides=$column->ImageName;
	
	if (! empty($slides)) {
	    
include("bootsrapslider.php");
?>
<!--
<input type="submit"  value="calclu"  name="calclu"  class="calclu">
<input type="close"   value="x"  name="close"  class="close">-->
<?php
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
<?php
	}
}
?>
<div class="marque">
<div class="news"> top news </div>
<marquee  direction="up" behavior="scroll"   bgcolor="#CCCCCC"    scrollamount="1" font-size="25px"  width= "100%"  height="20px">
<div align="center">
<a></a>
<br /><br />
<br /> 
</div>     			                 
</marquee>	    
</div>


<?php

$MAIN_ID=1;
$select="select * from marque Where News_id =$MAIN_ID";
#$Newsquery=mysqli_query($connect,$select);
$Newsquery=$this->connectF()->query($select);
while($column=mysqli_fetch_object($Newsquery)){
$News=$column->News;
if (!empty($News)) {
?>
<script>
var para='<?php echo  $News ; ?>';
 document.querySelector('.marque a').innerHTML = para;
</script>
<?php    
	}
        }

?>

<div class="fultopic">
<!--<div class="windows" >        </div>-->
<div class="para">
<div class="content"></div>
</div>
<?php
$MAIN_ID=1;
$SELECT="SELECT submenu.sub1menu , submenu.ID , paragraph.Paragraph  
FROM submenu LEFT JOIN paragraph
ON submenu.ID = paragraph.Paragraph_id where submenu.ID = $MAIN_ID";
#$query=mysqli_query($connect,$SELECT);
$query_pr=$this->connectF()->query($SELECT);
while($column=mysqli_fetch_object($query_pr)){
$Para=$column->Paragraph;
	
	if (! empty($Para)) {
?>
<script>
var para='<?php echo $Para ?>';
 document.querySelector('.para .content').innerHTML = para;
</script>
<?php
}
}
?>


<div class="static_box">  

<?php

$MAIN_ID=1;;
$selectu="select *  from   static 
Where static_id ='$MAIN_ID' ORDER BY  static.ID ASC ";
#$staticquery=mysqli_query($connect,$selectu);

$staticquery=$this->connectF()->query($selectu);


while($column=mysqli_fetch_object($staticquery)){
    $headline=$column->static_Name;
	if (!empty ($headline)){
    ?>
    
    <div class="headline col-sm-6 col-md-6  col-lg-7 "> <h1><?php echo  $headline ?>    </h1>  </div>
    
    <?php
    }
    ?>
    
    <?php
	$photo=$column->ImageName;
	if (!empty ($photo)){
		?>  
          <div class="FRAME_static">
          <div class="img1_static">
		
<img src="IMG/<?PHP ECHO $photo ?>" class="front_static"/>

<div class="title_static">
    
   <span class="title_s"> <?php echo  $column->title ?>  </span>  <br/>
 <span class="Number_static"> <?php echo  $column->static_Num ?> </span>

    <!--<input  type="hidden"     value="<?php echo $column->ID?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column->title ?> </button>-->
		</div>
		</div>
                </div>
		<?php
        
	}
	}
        
?>
</div>
 

<?php

$MAIN_ID=1;
$select="select submenu.sub1menu  , box.title  , box.ImageName ,box.ID, box.cat_Name
From submenu LEFT JOIN  box   
ON submenu.ID = box.Box_id 
Where  box.Box_id ='$MAIN_ID' ORDER BY  box.ID ASC ";
#$boxquery=mysqli_query($connect,$select);

$boxquery=$this->connectF()->query($select);

while($column=mysqli_fetch_object($boxquery)){
    $headline=$column->cat_Name;
	if (!empty ($headline)){
    ?> 
    <div class="headline col-sm-6 col-md-6  col-lg-7 "> <h1><?php echo  $headline ?>    </h1>  </div>
    
    <?php
    }
    ?>
    
    <?php
	$photo=$column->ImageName;
	if (!empty ($photo)){
		?>  
          <div class="FRAME">
          <div class="imgb<?php echo $column->ID?>">
		
<img src="IMG/<?PHP ECHO $photo ?>" class="front"/>

<div class="titleb<?php echo $column->ID?>"><a href="Blog?box_ID=<?php echo $column->ID?>"  id='linker' ><?php echo  $column->title ?></a>

    <!--<input  type="hidden"     value="<?php echo $column->ID?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column->title ?> </button>-->
		</div>
		</div>
                </div>
                
      <script>
	 
$(document).ready(function(e) {
    $('.imgb<?php echo $column->ID?>').hover(function(){
		$('.titleb<?php echo $column->ID?>').fadeToggle();
		$('.titleb<?php echo $column->ID?>').css({animation:'drive 2s  infinite 1s ease-out', },2000)
	});
});	
</script>                        
                
		<?php
        
	}
	}
        
?>

</div>


<div class="v_categories">  

<?php

$MAIN_ID=1;
$select_video="select submenu.sub1menu  , video.title  ,  video.ID, video.cat_Name   ,  video.VIDOName
From submenu LEFT JOIN video   
ON submenu.ID = video.VIDO_ID
Where  VIDO_ID ='$MAIN_ID'  ORDER BY   ID ASC";
#$VIDOquery=mysqli_query($connect,$select_video);

$VIDOquery=$this->connectF()->query($select_video);

while($column=mysqli_fetch_object($VIDOquery)){
    $headline=$column->cat_Name;
	if (!empty ($headline)){
    ?>
    <div class="Vheadline col-sm-6 col-md-6  col-lg-7"> <h1><?php echo  $headline ?>    </h1>  </div>
    
   <?php
    }
    ?>
    
    <?php
    
	$VIDO=$column->VIDOName;
	if (!empty ($VIDO)){
		?> 
               <DIV CLASS="V_FRAME">
          
          <div class="Vido1">

<video src="VIDEO/<?PHP echo $VIDO ?>" 

class="V_front"  controls="controls" width="50%" height="240"  tabindex="0"    loop="loop"  tabindex="0" />  


<source  src="VIDEO/<?PHP echo $VIDO ?>"  type="video/mp4">

</video>

<div class="v_title"><!--<a href="Blog?box_ID=< /*?phpecho $column->ID?/>"  id='linker' ></a>-->

<?php echo  $column->title ?>

    <!--<input  type="hidden"     value="<?php echo $column->ID?>"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  ><?php echo  $column->title ?>  </button>-->
		</div>
		</div>
                </DIV>
		<?php        
	}
	}
        
?>
</div>

<div class="close_res">x</div>
<div class="calclures">  </div>
<div class="clear"> </div>
<div class="form">  


<?php

$MAIN_ID=1;;
$select="select  *  from  forms  Where related_id =$MAIN_ID";
#$formquery=mysqli_query($connect,$select);

$formquery=$this->connectF()->query($select);

while($column=mysqli_fetch_object($formquery)){
    
    $form=$column->Form ;  
	
	?>
       
    
 <?php echo $form ?>;
  


	  <?php
	}

?>
 </div>

<!-- close class-->


</div>

</div>
	


<!--<script>

function send(){
    
var votrenom=document.getElementById('votrenom').value;
var votreprenom=document.getElementById('votreprenom').value;
var votree_mail=document.getElementById('votree_mail').value;
var votre_telephone=document.getElementById('votre_telephone').value;
var votre_message=document.getElementById('votre_message').value;
var send=document.getElementById('send').value;

$('.eva').load('contact.php',{votrenom:votrenom,votreprenom:votreprenom,votree_mail:votree_mail,votre_telephone:votre_telephone,votre_message:votre_message,send:send })

}

</script>-->


<!--<script>

function add(){
var bien=document.getElementById('bien').value;
var pieces=document.getElementById('pieces').value;
var demandes=document.getElementById('demandes').value;
var send=document.getElementById('send').value;

$('.calclures').load('calclu_p.php',{bien:bien,pieces:pieces,demandes:demandes,submit:send })

}
</script>-->

 
 
 


<?php
/*

$construction=$_POST->date_de_construction;
$pieces=$_POST->nombre_de_pieces;
$bien=$_POST->type_de_bien;
$demands=$_POST->diagnostics_demandes;
$Email=$_POST->email;

$ins="insert into calcul (constr,pieces,bien,demands,Email) Values ('$construction','$pieces','$bien','$demands','$Email')";

if($_POST->submit){
 
 mysqli_query($connect,$ins);
 
 
 echo"done";
 
}

*/
?>


<!--<script>
$(document).ready(function(e) {
    
$('#cat_link').click(function(e){	

$('.w_close').fadeIn();
	
$.ajax({
	
type:"GET",

url:"fetchbox.php",

data:{box_ID:$('#box_ID').val(), },
 
success:function(respond) {
    
		$('.windows').html(respond)
	}
	
      });		
});
	
});

</script>-->


<!--<script>
$(document).ready(function(e) {
  $('.w_close').click(function(e) {  
	
	$('.windows').fadeOut();
	
	$('.w_close').fadeOut();
	
});
});
</script>-->






















