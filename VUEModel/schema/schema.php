


<?php
$SELECT="select * From  box  Where ID < (SELECT MAX(id) FROM  box Where  Box_id ='$pg_id' ) ORDER BY  box.ID ASC";
$boxquery=$this->connectF()->query($SELECT);
while($column=mysqli_fetch_object($boxquery)){
?>


position: '<?php echo $column -> ID;?>',
item:'https://asphallt.net?/Blog/box_ID=<?php echo $column -> ID?>'



<?php
}
?>

