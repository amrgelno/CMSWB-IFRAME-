cat:[
               <?php                           

$boxquery=$this->connectF()->query("SELECT   *  from  box  Where  $cat ='$pg_id'   ORDER BY  ID ASC ");
while($column=mysqli_fetch_object($boxquery)){
  $style_type=$column->style_type;

  if(!empty(style_type)){
?>
    {styletype:"<?php echo $style_type ?>" ,     		
<?php
  }
?>


    headline:"<?php echo  $column->cat_Name ?>",
    ID:"<?php echo $column->ID?>",
    cat_img:"IMG/<?PHP echo $column->ImageName?>",
    FRAME:"FRAME <?php echo $column->animeffect?>",
    price:"<?php echo $column->price?>",
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
