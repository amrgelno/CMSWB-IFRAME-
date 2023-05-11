  <article class="static_box"  > 

       <div  v-for="(data,i) in static"   :key='i'    style="opacity:1;">

      <div class="headline col-sm-10 col-md-8  col-lg-7 "  v-if='data.catheadline' v-html='data.catheadline'>  </div>
 
          <div class="FRAME_static">
          <div class="img1_static">
		
<img :src="data.static_img" class="front_static"/>


<div class="title_static">
    
   <span class="title_s" v-html='data.static_title'>   </span>  <br/>

 <!-- <span class="Number_static"    v-html='data.static_Num'> </span> -->

 <span class="counter" style='color:#418bca;' :data-target='data.static_Num'> 0 </span>
    <!--<input  type="hidden"     value="data.static_ID"  id='box_ID'>    
<button  Id="cat_link"  onclick="send();" style="background:none; border:none; "  v-html='data.static_title' > </button>-->
		</div>
		</div>
                </div>

</div>
</article> 