<?php

error_reporting(0);

?>


<?php require_once('template/cover/cover.html');  ?>

<br />
<br />
<br />
<br />

<?php require_once('template/slider/slider.html');  ?>

<div class="clear">  </div>




<section class="fultopic">

<!-- <div class="marque" v-for="(data,i) in Marquee"  :key="i" >
<div class="news" > top news </div>
<marquee   direction="up" behavior="scroll"   bgcolor="#CCCCCC"    scrollamount="1" font-size="25px"  width= "100%"  height="20px">
<div align="center" v-html='data.News'>

</div>     			                 
</marquee>	    
</div> -->

<?php  require_once('template/paragraph/paragraph.html');  ?>



<?php  require_once('template/categories/categories.php');  ?>

<br/>
<br/>
<br/>

<div class="clear"> </div>


<?php  require_once('template/static_box/static_box.php');  ?>


<div class="clear"> </div>

<?php  require_once('template/topic/topic.html');  ?>


<?php  require_once('template/form/form.html');  ?>
 

</div>