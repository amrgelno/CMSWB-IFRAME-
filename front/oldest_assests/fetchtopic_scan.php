<section class="fultopic">
<?php


$searcher=$_POST['searcher'];
$SELECT="SELECT * from topic where content like '%$searcher%'";

$query=$this->connectF()->query($SELECT);
while($column=mysqli_fetch_object($query)){
	$photo=$column->ImageName;
	if (!empty($photo)) { 
	?>
<div class="img">

<img src="IMG/<?PHP echo $photo ?>" class="img"/>

</div>

<div class="text">

<a href="index.php?Topic_ID=<?php echo $column->ID?>"><?php echo $column->subject?></a>
<!--<?php echo $column->subject?>-->
<?Php echo '<br/>' ?>
<?php echo $column->content?>
</div>	
<?php
}
}
?>
</section>