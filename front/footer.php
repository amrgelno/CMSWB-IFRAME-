<a href="#carouselExampleCaptions" class="fa fa-angle-up" id="scroll-top"></a>
<?php  require_once('front/template/Brand/MultisliderBrand.php');  ?>

<footer class="footer"  :style='{display:display}'>

<br/>

<div class="info">

<div class="einfo"  >

    <div class="soicon"><img src="ame.png" class="socicon"></a></div>
    <div class="email">{{Email}}</div>
    </div>

<div class="einfo">
    <div class="soicon"><img src="phone-icon-line-telephone-symbol-vector-21084486.png" class="socicon"></a></div>
    <div class="mobile"><a :href="Telehref">{{Tele_Number}}   </a> </div>
    </div>

<div class="einfo">
    <div class="soicon"><img src="Address.png" class="socicon" ></a></div>
    <div class="Address"> {{street}}    </div>
    </div>

</div>

<UL id="menu" >

<li class="Link_M" v-for='(data,i) in  nav' :key='i'>
<span class='fa fa-star' > </span>  <a :href='data.Link_M' v-html='data.sub1menu'> </a></li> 

</UL>
<div class="logo">
     
        
	<img :src="companYlogo"  class="logo"  style='filter: brightness(0) invert(1);'/>
	
        </div>  
<hr>

<div class="socialposition" >

<div class="icon" v-for='(data,i) in  socialMedia' :key='i'>
    
<a :href="data.links">
     
<img :src="data.ICON" class='soc_icon'/>

</a>

</div>


</div>

<div class="copyright" style='text-align:center; font-size:20px;'>Copyright © monarch All Right </div> 




    
     
</footer>