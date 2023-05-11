<article   id='categories'  class='categories'  style='opacity:1; '>


<div   style='opacity:1; '>
<card     v-for="(data,i) in cat"   :key='i'      >

<headline   >

<h3 v-if='data.headline' >  {{data.headline}}  <span> </h3> </headline   >

<Overlay class='Overlay' v-if='data.styletype =="Overlay" '>
  <div :class="data.FRAME"   v-if="data.cat_img"  style='background:none; border:none;' >
  <div class="imgb"  > 
<img :src="data.cat_img" class="front"   />   
<div class="titleb"><a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a></div>
        </div>
        </div> 
</Overlay>

<Overlay  class='Overlay' v-if='data.styletype =="Overlay2" '>

  <div :class="data.FRAME"   v-if="data.cat_img"  style='background:none; border:none;' >
  <div class="imgbt1"  > 
<img :src="data.cat_img" class="front"   />   
<div class="titlebt1"><a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a></div>
        </div>
        </div> 
</Overlay>

<lightBox  class=' lightBox' v-if='data.styletype =="lightBox"'>

<div   :class="data.FRAME" v-if="data.cat_img"  style='background:none; border:none;' >
  <div class="imgbt1 Boxeffect"  > 
  <a :href='data.cat_img'  :data-lightbox="data.cat_title"  data-title="My caption" ><img :src="data.cat_img" class="front"   /> </a>  
<!-- <div class="titlebt1"><a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a></div> -->
        </div>
        </div> 
</lightBox>



<productcard  class='productcard' style='border:unset;' v-else-if='data.styletype =="productcard"' >
  <!-- <div class="col-md-3 col-xs-12   card mb-4 rounded-3 shadow-sm"   v-if="data.cat_img"  style="background:white; border:2px solid #000; " >
  <div class="spe-prods  " style='background:#9dbbe6;'  > 
<img :src="data.cat_img" class="front"   /> 
</div>
<div class="title"><h1><a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a></h1></div>
<div class="price-big"><h3> price: {{data.price}} $</h3>   </div>
<div class="mainbox py-3 text-white  bg-primary border-primary title "><h3><a  :href="data.cat_box_ID"  id='linker' >OrderNow</a><h3></div>
        </div> -->
        <div style='width:100%;'class="spe-prods card col-xs-12 col-xs-pull-3 co-sm-3 col-sm-push-1 col-md-3 col-md-push-1 mb-4 rounded-3 shadow-sm border-primary">
  <div class="card-header py-3 text-white bg-primary border-primary" style='background:gold;' >
    <h4 class="my-0 fw-normal"  style=' -webkit-text-stroke: 0.1rem white;' ><strong> <b>{{data.cat_title}}</b> </strong> </h4>
  </div>      
    <h1 class="card-title pricing-card-title" style='color:white; background:linear-gradient(to right, rgb(201, 197, 243) , rgba(236,21,98,0.1));'>
    <span class="star" style="text-align: center;">
    <i aria-hidden="true" class="fa fa-star"></i> 
<i aria-hidden="true" class="fa fa-star"></i> 
<i aria-hidden="true" class="fa fa-star"></i> 
<i aria-hidden="true" class="fa fa-star"></i>
<i aria-hidden="true" class="fa fa-star"></i>
<!-- <i aria-hidden="true" class="fa fa-star-o"></i> -->
</span>
<span style='font-size:24px; color:white;'>star</span>
    </h1>
    <span class="spe-prods" style='background:rgb(184, 184, 185); border:unset; padding-top:10px;'   > 
<img :src="data.cat_img" class="mainbox front "  styel='margin:0 auto;  '  /> 
</span>
<div class="card-body" style='font-size:20px;'>
<p>
</p>
<hr/>
      <p>Iteminfo</p>
<hr> 
<div class="price-big" style='text-align:right' ><strong style='color:blue;'><h1><span style='font-size:30px; color:black;'></span>&nbsp;<span style='color:green; -webkit-text-stroke: 1px green;'>$</span>&nbsp;<b style='color:black;'>{{data.price}}</b><strong><small class="text-muted fw-light">/mo</small></div>


<span   style='wdith:30%;'

class="cardbt  py-3 text-white  bg-primary border-primary title " style='wdith:95%;'>


<button type="button" 
    
style='  margin-left:0px; padding-top:0px;  padding-bottom:950px; height:80px; background:linear-gradient(to right, blue, rgba(236,21,98,0.1))' 
class="  py-3 text-white  bg-primary border-primary title w-100 btn btn-lg btn-primary  card-header py-3 text-white bg-primary border-primary"><h3><a  class='min_btn' :href="data.cat_box_ID"  ><strong ><b  style='font-size:25px;' class="carousel-control-next-icon"></b><b  style='font-size:25px;' class="carousel-control-next-icon"></b>&nbsp;<moreinfo style='-webkit-text-stroke: 0.1rem red;'><strong>More Info <strong></moreinfo> <strong></a><h3></button>
  </div>
</div>

        
</productcard>

<flipcard v-else-if='data.styletype =="flipcard"' >

<div :class="data.FRAME"   v-if="data.cat_img"  style='background:none; border:none;' >
  <div class="imgb"  > 
<img :src="data.cat_img" class="front"   />   
<div class="titleb"><a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a></div>
        </div>
        </div> 
</flipcard>




</div>
</card>
</article>
    <!-- Swiper JS -->
