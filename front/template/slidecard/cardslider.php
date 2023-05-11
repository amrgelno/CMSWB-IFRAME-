
<article  id='serv'  >     

<div  v-for="(data,i) in slidercat"   :key='i'    style="opacity:1;"  class="headline col-sm-10 col-md-8  col-lg-7 " 

v-if='data.headline' >
  <h3 v-html='data.headline'>    </h3>
</div>
<section class="testimonial_aria home_2">
   
<div class="swiper mySwiper col-lg-12">
      <div class="swiper-wrapper" >

     <!-- <div class="swiper-slide">Slide 1</div> -->

<div  class='swiper-slide'   v-for="(data,i) in slidercat"   :key='i'>

     <productcard    class=' col-lg-12  col-sm-12 col-md-12 col-xs-12' style='padding:unset; object-fit:cover;  border:unset; zoom:70%;'  >
              <div style='width:100%;'class="spe-prods card col-xs-12  co-sm-12  col-md-12   rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white  border-primary" style='background:#022c4b;' >
          <h4 class="my-0 fw-normal"  style=' -webkit-text-stroke: 0.1rem white;' ><strong> <b>{{data.cat_title}}</b> </strong> </h4>
        </div>      
          <h1 class="card-title pricing-card-title" style='color:white; background:linear-gradient(to right, #377796 , rgba(236,21,98,0.1));'>
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
  class="  py-3 text-white  bg-primary border-primary title w-100 btn btn-lg btn-primary  card-header py-3 text-white bg-primary border-primary"><h3><a  class='min_btn' :href="data.cat_box_ID"  ><strong ><b  style='font-size:25px;' class="carousel-control-next-icon"></b><b  style='font-size:25px;' class="carousel-control-next-icon"></b>&nbsp;<moreinfo style='-webkit-text-stroke: 0.1rem white;'><strong>More Info <strong></moreinfo> <strong></a><h3></button>
        </div>
      </div>

              
</productcard>
</div>
         </div>

<div class="swiper-pagination"></div>
<!-- <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div> -->

    </div>
 <!-- If we need navigation buttons -->


</section>
</article>

<div class="clear"></div>

