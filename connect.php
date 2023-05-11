
<?php
abstract class condb {
  // Properties
  
  protected $localhost='localhost';
  protected $password='root';
  protected $dbuser='root';
  protected $db2='cms';

  // Methods
 public function connectF() {
  
   $connect= new mysqli($this->localhost,$this->dbuser,$this->password,$this->db2)  ;
   
   return   $connect;
   
	/*mysqli_select_db($connect,);*/
  } 
  
     #abstract function sql();
	 #abstract function cover();
	 
}



?>









