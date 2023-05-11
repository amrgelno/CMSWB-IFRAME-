Marquee: [
<?php
$query=$this->connectF()->query("SELECT  *  from  marque  where  $marque = '$pg_id'  ");
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