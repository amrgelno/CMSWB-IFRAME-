 Paragraph:[
<?php
$query=$this->connectF()->query("SELECT  *  from  paragraph  where $paragraph = '$pg_id'  ");
while($column=mysqli_fetch_object($query)){
$Para=$column->Paragraph;
	if (! empty($Para)) {
?>
               
       {
            paragraph :'<?php echo $Para ?>',
     
            paragraphstyle:'<?php echo $column->paragraphstyle ?>'
     
     },
    
        <?PHP
   }
       }
       ?>
  ]	,