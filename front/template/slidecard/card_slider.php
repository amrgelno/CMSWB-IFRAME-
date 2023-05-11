

<article class="categories" id='serv' >     



<div  v-for="(data,i) in slidercat"   :key='i'    style="opacity:1;"  class="headline col-sm-10 col-md-8  col-lg-7 "  v-if='data.headline' >
  <h1 v-html='data.headline'>    </h1>
</div>

<div class="content">
<div class="site-section bg-left-half mb-5">
      <div class="container owl-2-style">

<div class="owl-carousel owl-2">
          <div class="media-29101" v-for="(data,i) in slidercat"   :key='i'    style="opacity:1;" >

          <a href="#"><img :src="data.cat_img"  alt="Image" class="img-fluid"></a>
            <h3><a href="#">{{data.cat_title}}</a></h3>			</div>   
                           
          </div>

</div>

</div></div>
</article>

<div class="clear"></div>

