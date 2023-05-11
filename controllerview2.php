<SCRIPT>
   
new Vue({
	   
       el: "#vueapp",                          // Data Centre
            
          data: {               // reterive data  with  php line

            <?php  

$includeslider=$this->connectF()
->query("SELECT  *  from  slider   where   $sliderModel[0] =  '$pg_id'  OR   relatedtopic_id =  '$relatedtopic_id' ");

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

           <?php   
   $query_cover=$this->connectF()
   ->query("SELECT *  from  cover  where  $coverModel[0] ='$pg_id'  ") ;
   while($column=mysqli_fetch_object($query_cover)){
   
       $photo=$column->Cover_Name;
       
   if(!empty($photo)){
           
       ?>	    
   
        Imgurl:'IMG/<?php echo $photo  ?>',
    
        <?PHP
   }
  }   
?>

<?php
$formquery=$this->connectF()->query("select * from  forms Where  $formModel[0] ='$pg_id'  ");
while($column=mysqli_fetch_object($formquery)){
    ?>
    form : '<?php echo $column->Form ?>' ,  
    <?php
	}
	
?>


Marquee: [
<?php
$query=$this->connectF()->query("SELECT  *  from  marque  where $marqueModel[0] = '$pg_id'  ");
while($column=mysqli_fetch_object($query)){
$marque=$column->News;
	if (! empty($marque)) {
?>             
               {News:"<a><?php echo  $marque ; ?></a><br /><br /><br />"},
    
        <?PHP
   }
       }
       ?>
  ]	,


  Paragraph:[
<?php
$query=$this->connectF()->query("SELECT  *  from  paragraph  where $ParagraphModel[0] = '$pg_id'  ");
while($column=mysqli_fetch_object($query)){
$Para=$column->Paragraph;
	if (! empty($Para)) {
?>
               
       {paragraph :'<?php echo $Para ?>'},
    
        <?PHP
   }
       }
       ?>
  ]	,


  Topic:[

  <?php
$query_Topic=$this->connectF()->query("SELECT  * from   topic   where  $topicModel[0] = '$pg_id'  ");
while($column=mysqli_fetch_object($query_Topic)){
	$photo=$column->ImageName;
	if (!empty($photo)) { 
	?>
{Topic_IMG:'IMG/<?PHP echo $photo ?>',
Topic_ID:'Blog?Topic_ID=<?php echo $column->ID?>',
Topic_subject:'<?php echo $column->subject?>',
Topic_content:'<?php echo $column->content?>'},
	
<?php
}
}
?>       

  ],
             
  cat:[
               <?php                           
$boxquery=$this->connectF()
->query("SELECT   *  from    box  Where  $BoxModel[0] ='$pg_id'   ORDER BY  ID ASC ");
while($column=mysqli_fetch_object($boxquery)){
  $headline=$column->cat_Name;
	if (!empty ($headline)){
?>
   {catheadline:"<h1><?php echo  $headline ?></h1>",ID:"<?php echo $column->ID?>"},
<?php }  ?>
          		
{cat_img:"IMG/<?PHP echo $column->ImageName?>",

cat_box_ID:"Blog?box_ID=<?php echo $column->ID?>" ,

imgb:"imgb<?php echo $column->ID?>",

titleb:"titleb<?php echo $column->ID?>",

hoveron:"hover<?php echo $column->ID?>",

hideon:"hide<?php echo $column->ID?>",

show:false,
    
cat_title:"<?php echo  $column->title ?>"},

<?php
}
?>
],


static:[
<?php
$staticquery=$this->connectF()
->query("select * from static Where   $staticModel[0] ='$pg_id' ORDER BY  static.ID ASC ");
while($column=mysqli_fetch_object($staticquery)){
  $headline=$column -> static_Name;
if (!empty ($headline)){
  ?>
  
  {catheadline:"<h1><?php echo  $headline ?></h1>",ID:"<?php echo $column->ID    ?>"},
  
  <?php  }  ?>
 
  <?php
$photo=$column -> ImageName;
if (!empty ($photo)){
  ?>  
          
          { static_img :"IMG/<?PHP echo $photo ?>" ,

static_Num:"<?php echo  $column -> static_Num ?>", 

static_ID:"<?php echo $column -> ID?>",

static_title:"<?php echo  $column -> title ?>" },

<?php
}
}
?>
],



vcat:[

<?php
$VIDOquery=$this->connectF()
->query("select  *  from  VIDEO   Where   $VIDOModel[0] = '$pg_id'     ORDER BY  VIDEO.ID ASC");

while($column=mysqli_fetch_object($VIDOquery)){
  
  $headline=$column->cat_Name;

if (!empty ($headline)){
     ?>
 {catheadline:"<h1><?php echo  $headline ?></h1>",ID:"<?php echo $column->ID?>"},
 
<?php }  ?>
            
{

catheadline:"<h1><?php echo  $headline ?></h1>",

VIDEO:"VIDEO/<?PHP echo $column->VIDOName ?>",

cat_VIDEO_ID:"Blog?box_ID=<?php echo $column->ID?>" ,
  
cat_title:"<?php echo  $column->title ?>"},

<?php
}

?>
],




}


        })
   
       
</SCRIPT>