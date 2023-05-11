
Topic:[

<?php
$query_Topic=$this->connectF()->query("SELECT  * from   topic   where  $topic = '$pg_id'  ");
while($column=mysqli_fetch_object($query_Topic)){
  $photo=$column->ImageName;
  if (!empty($photo)) { 
  ?>
{Topic_IMG:'IMG/<?PHP echo $photo ?>',
Topic_ID:'Blog?Topic_ID=<?php echo $column->ID?>',
Topic_subject:'<?php echo $column->subject?>',
Topic_content:'<?php echo $column->content?>',
Rates:'<?php echo $column->Rates?>',
content2:'<?php echo $column->content2?>',
show:<?php echo $column->animeffect?>,
styletype:'<?php echo $column->style_type?>'},

  
<?php
}
}
?>       

],