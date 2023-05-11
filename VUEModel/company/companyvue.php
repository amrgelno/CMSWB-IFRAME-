<?php

$info=$this->connectF()->query("select * from company where ID=(select MAX(id) from company");

while($row=mysqli_fetch_object($info)){
?>

Tele_Number:'<?php echo $row->Tele_Number ?>',
fax:'<?php echo $row->fax  ?>',
companYlogo:'IMG/<?php echo $row->path_pic ?>'

<?php
}
?>