
<?php
$info=$this->connectF()->query("select * from keywords where  $Keywords='$pg_id'");

while($row=mysqli_fetch_object($info)){
?>

title: "<?php echo $row->title  ?>",
description:"<?php echo $row->description  ?>",
keyword:"<?php echo $row->Keyword ?>",
author:"<?php echo $row->author ?>",

<?php
}
?>