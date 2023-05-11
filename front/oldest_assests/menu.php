<!--<div itemscope itemtype="https://schema.org/Person">   </div>
-->
<div itemscope > 

  <button type="button"   class="menu"> ≡ Menu   </button>

<ul class="nav" >
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
          <a itemprop="url" href="Blog?MainM_ID=<?php echo $column->ID?>">  
   <span itemprop="name"> <?php echo $column->sub1menu?> </span> </a> 
    
<?php
        }
?>

 

<ul id="submenu">
<?php

$MID = $column->ID;

$excuite2=$this->connectF()->query("select *  from submenu  WHERE parent_id =$MID  ORDER BY  ID DESC  ");

while($column=mysqli_fetch_object($excuite2)){
?>
<li class="sub1">
    
    <?php

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
          <a itemprop="url" href="Blog?MainM_ID=<?php echo $column->ID?>">  
    <span itemprop="name"><?php echo $column->sub1menu?></span></a> 
    
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
          <a itemprop="url" href="Blog?MainM_ID=<?php echo $column->ID?>">  
    <span itemprop="name"><?php echo $column->sub1menu;?></span></a> 
    
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
<li>  <form action="Blog"  method="get">

<input type="search"  size="25"  name="search"   class="searcher" style="color: black;"  />


<input type="submit"  size="25"  name="search" VALUE=" "   class="searchbt"  style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />
			  
	</form>   </li>
    
    
</ul>

   </div>





