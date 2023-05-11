
<input type="submit" name="submit" value="≡ Menu" class="menu"/>
<ul class="nav">
<?php 


$excuite=$this->connectF()->query("select * from submenu WHERE ISNULL (parent_id) ORDER BY  ID ASC");

while($column=mysqli_fetch_object($excuite)){
	
	?>
    
<li class="Dropmenu">
 <?php
    $icon= $column->submenuico;
    if(!empty($icon)){
    
    ?>
    <img src="IMG/<?php echo $icon?>" class="Micon"/> 
    
    
    <?php
    }
    ?>
 
 
   
    <?php
    $footer = $column->footer; 
    
    if(!empty($footer)){
        
        echo $column->sub1menu;
    }
        elseif(empty($footer)){
            
            ?>
          <a href="index.php?MainM_ID=<?php echo $column->ID?>">  
    <?php echo $column->sub1menu?></a> 
    
<?php
        }
?>

 

<ul id="submenu">
<?php
$MID = $column->ID;

$excuite2=$this->connectF()->query("select *  from submenu  WHERE parent_id =$MID  ORDER BY  ID DESC  ");

while($column=mysqli_fetch_object($excuite2)){
?>
<li class="sub1"><?php
    $icon= $column->submenuico;
    if(!empty($icon)){
    
    ?>
    <img src="IMG/<?php echo $icon?>" class="Micon" /> 
    
    
    <?php
    }
    ?>
    <?php
    $footer = $column->footer; 
    
    if(!empty($footer)){
        
        echo $column->sub1menu;
    }
        elseif(empty($footer)){
            
            ?>
          <a href="index.php?MainM_ID=<?php echo $column->ID?>">  
    <?php echo $column->sub1menu?></a> 
    
<?php
        }
?>


<UL ID="TREMENU">
<?PHP
$SID = $column->ID;

$excu=$this->connectF()->query("select *  from submenu WHERE SUBMENUID = $SID  ORDER BY  ID ASC ");

while($column=mysqli_fetch_object($excu)){
?>
<li class="sub2"><?php
    $icon= $column->submenuico;
    if(!empty($icon)){
    
    ?>
    <img src="IMG/<?php echo $icon?>" class="Micon" /> 
    
    
    <?php
    }
    ?>
    <?php
    $footer = $column->footer; 
    
    if(!empty($footer)){
        
        echo $column->sub1menu;
    }
        elseif(empty($footer)){
            
            ?>
          <a href="index.php?MainM_ID=<?php echo $column->ID?>">  
    <?php echo $column->sub1menu;?></a> 
    
<?php
        }
?>
<?php
}
?>
</UL>
</li>
<?php
}

?>
</ul>
</li>
<?php
}
?>
</ul>
<script>
$(document).ready(function(e) {
$('.menu').click(function(e) {
$('.nav').fadeToggle(2000)	
	
});	    
});


</script>
<script>
$(document).ready(function(e) {
    $(".loadingbg").delay(1500).fadeOut()
		
});
</script>
<script>
/*
$(document).ready(function(e) {
	$(".img1").mouseover(function(e){
	
$(".title").fadeToggle(1000);
});
});*/
</script> 






