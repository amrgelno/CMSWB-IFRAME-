social:[
    
    <?php
    
    $query=$this->connectF()->query("select *  from  social ");
    
    while($column=mysqli_fetch_object($query)){
    
    $ICON=$column->social_icon;
    
    if(!empty($ICON)){
    ?>
        
    {links:'<?php echo $column->links?>',
        
    ICON:'IMG/<?php  echo $ICON?>' },
    
    <?php
    }
    }
    ?>
    ],
    
    