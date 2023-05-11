

<article class="categories" id='serv' >     



<div  v-for="(data,i) in slidercat"   :key='i'    style="opacity:1;"  class="headline col-sm-10 col-md-8  col-lg-7 "  v-if='data.headline' >
  <h1 v-html='data.headline'>    </h1>
</div>
<section class="testimonial_aria home_2">
          
<vueper-slides autoplay
  class="no-shadow"
  :visible-slides="3"
  slide-multiple
  :gap="3"
  :slide-ratio="1 / 4"
  :dragging-distance="200"
  :breakpoints="{ 800: { visibleSlides: 2, slideMultiple: 2 } }">
  

<vueper-slide   v-for="(data,i) in slidercat"   :key='i'  >
<template #content>
  <card :class="data.FRAME"   v-if="data.cat_img"  style='background:none; border:none;' >
  <div class="imgb"  > 
<img :src="data.cat_img" class="front"   />   
<div class="titleb"><a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a></div>
        </div>
</card> 
        </template>

</vueper-slide>

</vueper-slides>

</div>
</section>
</article>

<div class="clear"></div>

