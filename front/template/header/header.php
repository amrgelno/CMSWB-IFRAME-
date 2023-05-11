<div class="header col-lg-12  col-md-12 ">

<div class="emob">
<div class="mob"><img src="phone-icon-line-telephone-symbol-vector-21084486.png" class="socicon"></a></div>
<div class="mobtext">{{ Tele_Number }} -  {{ fax }} </div>
</div>

  <!-- <div class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12" > 

<?php

#include("front/menu.php");

?>

</div> -->

<div class="icon" v-for='(data,i) in  social' :key='i'>

<a :href="data.links"> <img :src="data.ICON" style="width:40px ; height: 40px; "/>   </a>

</div>

 <!-- <div id='vueapp'> -->


</div>
