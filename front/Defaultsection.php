<?php

error_reporting(0);

?>


<main><template><v-section>

<!--------------------------------------------------- topic --------------------------------------------------->

<article class="cover"  v-if="Imgurl" >
        
        <img    v-bind:src="Imgurl"   class="Image"/>
	
</article>
        
<div class="clear" v-if="Imgurl" > </div>

<div class="clear" v-if="Imgurl" > </div>

<br / v-if="Imgurl" >
<br / v-if="Imgurl" >
<br / v-if="Imgurl" >
<br / v-if="Imgurl" >

<!--------------------------------------------------- slider --------------------------------------------------->
<div class="clear" > </div>
<div class="clear" > </div>

<article class="slider col-lg-12 col-xs-12 col-md-12 col-sm-12" v-if="embed_slider"> 
<div class="sliderimg col-lg-12 col-xs-12 col-md-12 col-sm-12"><!--str slider img -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">
  <!-- Define how many slides to put in the carousel -->
 
  <!-- Define the text to place over the image -->
 
  <div class="carousel-inner">
    <div class="item active" >
    <div class ="slide1"><img :src="Minslide"  loading='lazy' class="Image"  /></div>
    <div class="carousel-caption"><Font size='5px' v-html='Mintitle'>    </Font> </div>     
    </div>
         
    <div class="item"  v-for="(data,i) in sliderB"   :key='i'>
    <div class="slide2"><img :src="data.largeslide2" loading='fast' class="Image"  /></div>
    <div class="carousel-caption"><Font size='5px' v-html='data.largetitle2'>    </Font> </div> 
     </div>     
   
      
      
<script src="js/-1jquery.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  </div>
  </div> 
  <!-- Set the actions to take when the arrows are clicked -->
  <a class="left carousel-control" href="#theCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"> </span>
  </a>
  <a class="right carousel-control" href="#theCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div></article>


<div class="clear" > </div>
<div class="clear" > </div>
<div class="clear" > </div>
<div class="clear" > </div>

<div class="clear" v-if="embed_slider">  </div>

<!--------------------------------------------------- fultopic --------------------------------------------------->
<section class="fultopic" align='center'>



<!--------------------------------------------------- Marque --------------------------------------------------->

<!-- <div class="marque" v-for="(data,i) in Marquee"  :key="i" >
<div class="news" > top news </div>
<marquee   direction="up" behavior="scroll"   bgcolor="#CCCCCC"    scrollamount="1" font-size="25px"  width= "100%"  height="20px">
<div align="center" v-html='data.News'>

</div>     			                 
</marquee>	    
</div> -->


<!--------------------------------------------------- paragraph --------------------------------------------------->

<Article class="content"  v-for="(data,i) in Paragraph"  :key="i"  v-if='data.paragraph'>

<span v-html='data.paragraph'>  </span>
</Article>


<div class="clear"> </div>


<!--------------------------------------------------- static_box --------------------------------------------------->
       <article class="static_box"  > 

       <div  v-for="(data,i) in static"   :key='i'    style="opacity:1;">

      <div class="headline col-sm-10 col-md-8  col-lg-7 "  v-if='data.catheadline' v-html='data.catheadline'>  </div>
 
          <div class="FRAME_static">
          <div class="img1_static">
		
<img :src="data.static_img" class="front_static"/>


<div class="title_static">
    
   <span class="title_s" v-html='data.static_title'>   </span>  <br/>
 <span class="Number_static" v-html='data.static_Num'> </span>
    <!--<input  type="hidden"     value="data.static_ID"  id='box_ID'>    
<button  Id="cat_link"  onclick="send();" style="background:none; border:none; "  v-html='data.static_title' > </button>-->
		</div>
		</div>
                </div>

</div>
</article> 


<!--------------------------------------------------- categories --------------------------------------------------->

<article class="categories"   >     

<div  v-for="(data,i) in cat"   :key='i'    style="opacity:1;">

<div class="headline col-sm-10 col-md-8  col-lg-7 "  v-if='data.catheadline' v-html='data.catheadline'>  </div>

          <div class="FRAME"   v-if="data.cat_img"  @mouseout='data.show = false' >

          <div :class="data.imgb" >
		
<img :src="data.cat_img" class="front"    @mouseover='data.show = true'    />   

<div :class="data.titleb"   v-show='data.show'  @mouseover='data.show = true'  style='animation:drive 2s  infinite 1s ease-out'  ><a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a>

    <!--<input  type="hidden"     :value="data.cat_box_ID"  id='box_ID'>
    
<button  Id="cat_link"  
onclick="send();" style="background:none; border:none; "  >{{data.cat_title}} </button>-->
		</div>
		</div>
                </div>
                </div>

</article>



<br/>
<br/>
<br/>





<div class="clear"> </div>


<!--------------------------------------------------- Topic --------------------------------------------------->


<Article class="topic" >

<div class='topic-FRAME' v-for="(data,index) in Topic"  :key="index"   v-if='data.Topic_content'>

<div class="img">

<img  :src="data.Topic_IMG" class="img"/>

</div>

<div class="text">

<!-- <a :href="data.Topic_ID">[{{index}}]-{{data.Topic_subject}}</a> -->

<a :href="data.Topic_ID">{{data.Topic_subject}}</a>
<!--{{data.Topic_subject}}-->
<?Php echo '<br/>' ?>


<span v-html='data.Topic_content'>  </span>
</div>	
</div>

</Article>

<!--------------------------------------------------- form --------------------------------------------------->
<article class="form"  v-html='form'></article>
	

<!--------------------------------------------------- v_categories --------------------------------------------------->
<article class="v_categories"  v-for="(data,i) in vcat"   :key='i'    style="opacity:1;">

<div  v-for="(data,i) in  vcat"   :key='i'    style="opacity:1;">

    <div class="headline col-sm-10 col-md-8  col-lg-7 " v-if='data.catheadline' v-html='data.catheadline'> 
      </div>
               <div CLASS="V_FRAME" >          
          <div class="Vido1">

<video  :src="data.VIDEO" class="front"  controls="controls" width="50%" height="240"  tabindex="0"    loop="loop"  tabindex="0" />  

<source  :src="VIDEO/data.VIDEO"  type="video/mp4"></video>

<div class="v_title" v-html='data.cat_title'><!--<a :href="cat_VIDEO_ID"  id='linker' ></a>-->

		</div>
		</div>
                </div>

</article>



</main></template></v-section>



<div class="close_res">x</div>
<div class="calclures">   </div>
 




