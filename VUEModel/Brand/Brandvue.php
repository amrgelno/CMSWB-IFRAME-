Brand:[
               <?php                           

$Brandquery=
$this->connectF()
->query("SELECT   *  from  brand  Where  $Brand ='$pg_id'   ORDER BY  ID ASC ");
while($column=mysqli_fetch_object($Brandquery)){

?>
  
  {img:"IMG/<?PHP echo $column->Brandname?>",},

<?php
}
?>
],
