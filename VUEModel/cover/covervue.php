<?php   
   $query_cover=$this->connectF()
   ->query("SELECT *  from  cover  where  $cover ='$pg_id'  ") ;
   while($column=mysqli_fetch_object($query_cover)){
   
       $photo=$column->Cover_Name;
       
   if(!empty($photo)){
           
       ?>	    
   
        Imgurl:'IMG/<?php echo $photo  ?>',
    
        <?PHP
   }
  }   
?>
