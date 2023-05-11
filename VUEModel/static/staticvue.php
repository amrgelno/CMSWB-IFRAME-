
static:[
<?php
$staticquery=$this->connectF()
->query("select * from static Where  $static ='$pg_id' ORDER BY  static.ID ASC ");
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