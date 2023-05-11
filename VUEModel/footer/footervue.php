display:'block',

<?php


$info=$this->connectF()->query("select * from company where ID=(select MAX(id) from company)");

while($row=mysqli_fetch_object($info)){

?>
    
Email:'<?php echo $row->Email ?>',

Tele_Number:'<?php echo $row->Tele_Number ?>',

Telehref:'https://api.whatsapp.com/send?phone=<?php echo $row->Tele_Number?>',

street:'<?php echo $row->street  ?>',

companYlogo:'IMG/<?php echo $row->path_pic ?>',

    
    <?php
}
?>

<?php

$logo=$this->connectF()->query("select * from company where ID=(select MAX(id) from company)");

while($row=mysqli_fetch_object($logo)){

$photo=$row->path_pic;
	
if(!empty($photo)){
		
		?>
   
	LOGO:'IMG/<?php echo $photo ?>',

        <?php
}

}
?>

nav:[

<?php    
  
 $query=$this->connectF()->query("select * from submenu where ISNULL (footer) OR footer='' ");
    
  while($row=mysqli_fetch_object($query)){  
  ?>
   
{Link_M:'index.php?MainM_ID=<?php echo $row->ID ?>',

sub1menu:'<?php echo $row->sub1menu ?>'},

<?php
}
?>

],

socialMedia:[
    
<?php

$query=$this->connectF()->query("select *  from  social ");

while($column=mysqli_fetch_object($query)){

$ICON=$column->social_icon;

if(!empty($ICON)){
?>
    
{links:'<?php echo $column->links?>',
    
ICON:'IMG/<?php  echo $ICON?>' },

<?php
}
}
?>
],

