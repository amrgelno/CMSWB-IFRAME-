vcat:[

<?php
$VIDOquery=$this->connectF()
->query("select  *  from  VIDEO   Where   $video = '$pg_id'     ORDER BY  VIDEO.ID ASC");

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