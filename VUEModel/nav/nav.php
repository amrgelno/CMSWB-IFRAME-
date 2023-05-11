
isdisplay:false,
isplay:false,
show:true,

Dropmenu:[

<?php 

$excuite=$this->connectF()->query("select * from submenu WHERE ISNULL (parent_id) ORDER BY  ID ASC");

while($column=mysqli_fetch_object($excuite)){
	  
?>

    
 {footer:'<?php echo $column->footer ?>',
  Micon: '<?php echo $column->submenuico ?>', 
  itemphref:'Blog?MainM_ID=<?php echo $column->ID?>',
  img:'IMG/<?php echo $column->submenuico ?>',
  sub1menu:'<?php echo $column->sub1menu?>'},
    
<?php
$MID = $column->ID;
?>

<?php
        }
?>


], 
submenu:[

<?php
$excuite2=$this->connectF()->query("select *  from submenu  WHERE parent_id =$MID  ORDER BY  ID DESC  ");

while($column=mysqli_fetch_object($excuite2)){

    ?>
    
 {footer:'<?php echo $column->footer ?>',
  parent_id:'<?php echo $column->parent_id ?>',
  Micon: '<?php echo $column->submenuico ?>',
  img:'IMG/<?php echo $column->submenuico ?>',
  itemphref:'Blog?MainM_ID=<?php echo $column->ID?>',
  sub1menu:'<?php echo $column->sub1menu?>'},
    


<?php
        }
?>

],

TREMENU:[

<?PHP

$excuite3=$this->connectF()->query("select *  from submenu  WHERE parent_id =$MID and  footer != ' ' ORDER BY  ID DESC  ");

while($column=mysqli_fetch_object($excuite3)){

$SID = $column->ID;

?>



        <?php

        $excu=$this->connectF()->query("select *  from submenu WHERE SUBMENUID = $SID  ORDER BY  ID ASC ");
        
        while($column=mysqli_fetch_object($excu)){
        
            ?>
                    
             {  footer:'<?php  echo $column->footer ?>',
                SUBMENUID:'<?php echo $column->SUBMENUID ?>',
                Micon: '<?php echo $column->submenuico ?>',
                img:'IMG/<?php echo $column->submenuico ?>',
                itemphref:'Blog?MainM_ID=<?php echo $column->ID?>',
                sub1menu:'<?php echo $column->sub1menu?>'},
            
        <?php
                }
            
        ?>
       
<?php
}
?>
 ],








