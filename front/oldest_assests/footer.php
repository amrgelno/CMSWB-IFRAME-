
<footer class="footer">
<div class="info">
<?php

$info=$this->connectF()->query("select * from company where ID=(select MAX(id) from company)");

while($row=mysqli_fetch_object($info)){
?>
<div class="einfo">
    <div class="soicon"><img src="ame.png" class="socicon"></a></div><div class="email"><?php echo $row->Email  ?></div>
    </div>       
<div class="einfo">
    <div class="soicon"><img src="phone-icon-line-telephone-symbol-vector-21084486.png" class="socicon"></a></div>
    <div class="mobile"><a href="https://api.whatsapp.com/send?phone=<?php echo $row->Tele_Number ?>"><?php echo $row->Tele_Number  ?> </a> </div>
    </div>      
<div class="einfo">
    <div class="soicon"><img src="Address.png" class="socicon" ></a></div><div class="Address"> <?php echo $row->street  ?>  </div>
    </div>
<?php
}
?>
</div>
<UL id="menu">
<?php    
  
 $query=$this->connectF()->query("select * from submenu where ISNULL (footer) OR footer='' ");
    
  while($row=mysqli_fetch_object($query)){  
  ?>
   
<li class="Link_M"><a href='index.php?MainM_ID=<?php echo $row->ID?>'><?php echo $row->sub1menu ?></a></li> 

<?php
}
?>
</UL>
<div class="copyright">
<br />&nbsp;trustbedrijf_2021 </div> 

<?php

$logo=$this->connectF()->query("select * from company where ID=(select MAX(id) from company)");

while($row=mysqli_fetch_object($logo)){

$photo=$row->path_pic;
	
if(!empty($photo)){
		
		?>
        <div class="logo">
     
        
	<img src="IMG/<?php echo $photo ?>"  class="logo"/>
	
        </div>
        <?php
}

}
?>

<div class="socialposition">
<?php

$query=$this->connectF()->query("select *  from  social ");

while($column=mysqli_fetch_object($query)){
$ICON=$column->social_icon;

if(!empty($photo)){
?>

<div class="icon">
    
<a href="<?php echo $column->links?>">
    
<img src="IMG/<?php  echo $ICON?> " class='soc_icon'/>

</a>

</div>

<?php
}
}

?>



</div>
</footer>