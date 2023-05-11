<article class="categories"   >     

<div  v-for="(data,i) in cat"   :key='i'    style="opacity:1;">

<div class="headline col-sm-10 col-md-8  col-lg-7 "  v-if='data.catheadline' v-html='data.catheadline'>  </div>

          <div :class="data.FRAME"   v-if="data.cat_img"        @mouseout='data.show = false' >

          <div :class="data.imgb"  @mouseover='data.show = true'> 
		
<img :src="data.cat_img" class="front"   />   

<div :class="data.titleb"   v-show='data.show'  @mouseover='data.show = true'   @mouseout='data.show = false' style='animation:drive 2s  infinite 1s ease-out'  >
<a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a>	</div>
                </div>
                </div>
                </div>
</article>

