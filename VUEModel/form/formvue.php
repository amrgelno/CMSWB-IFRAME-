<?php
$formquery=$this->connectF()->query("select * from  forms Where  $Form ='$pg_id'  ");
while($column=mysqli_fetch_object($formquery)){
    ?>
    form : '<?php echo $column->Form ?>' ,  
    <?php
	}
	
?>