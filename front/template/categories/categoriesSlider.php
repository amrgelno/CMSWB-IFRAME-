<article class="categories" >     

<div  v-for="(data,i) in cat"   :key='i'    style="opacity:1;">

<div class="headline col-sm-10 col-md-8  col-lg-7"  v-if='data.catheadline' v-html='data.catheadline'>  </div>
         
<div :class="data.FRAME"   v-if="data.cat_img"  style='background:none; border:none;' >

          <div class="imgb"  > 
		
<img :src="data.cat_img" class="front"   />   


<div class="titleb">
<a  :href="data.cat_box_ID"  id='linker' >{{data.cat_title}}</a>	</div>
                </div>
                </div>
                </div>

</article>

<div class="ourbkground wow flipInX" data-wow-delay="0.6s">
			<div class="container text-center"><h1 class="text-center">A multi product Bootstrap Carousel</h1>
				<div class="row">
                    <div class="carousel slide row innerbkground" data-ride="carousel" data-type="multi" data-interval="3000" id="productscarousel">
                    
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                
	             <div class="spe-prods">
					<div class="mainbox">
						<h3>A Smartphone</h3>
                        <img class="rotprod" src="img/products/p1.png" alt="">
					</div>
					<div class="price-big">
						<div>
							<div class="floatting-price">
								<h3>$99</h3>
							</div>
							<div class="month">
								<p>/ piece</p>
							</div>
						</div>
						<div class="ordersection">
								<a href="#" class="buybtn">Order</a>
						</div>
					</div>
				</div>
                                
                                
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                
                              <div class="spe-prods">
					<div class="mainbox">
						<h3>A Desktop</h3>
                        <img class="rotprod" src="img/products/p2.png" alt="">
					</div>
					<div class="price-big">
						<div>
							<div class="floatting-price">
								<h3>$1100</h3>
							</div>
							<div class="month">
								<p>/ piece</p>
							</div>
						</div>
						<div class="ordersection">
								<a href="#" class="buybtn">Order</a>
						</div>
					</div>
				</div>
                                
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                
	             <div class="spe-prods">
					<div class="mainbox">
						<h3>Brand Notebook</h3>
                        <img class="rotprod" src="img/products/p3.png" alt="">
					</div>
					<div class="price-big">
						<div>
							<div class="floatting-price">
								<h3>$899</h3>
							</div>
							<div class="month">
								<p>/ piece</p>
							</div>
						</div>
						<div class="ordersection">
								<a href="#" class="buybtn">Order</a>
						</div>
					</div>
				</div>
                                
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                              
	             <div class="spe-prods">
					<div class="mainbox">
						<h3>Tablet Brand Name</h3>
                        <img class="rotprod" src="img/products/p4.png" alt="">
					</div>
					<div class="price-big">
						<div>
							<div class="floatting-price">
								<h3>$105</h3>
							</div>
							<div class="month">
								<p>/ piece</p>
							</div>
						</div>
						<div class="ordersection">
								<a href="#" class="buybtn">Order</a>
						</div>
					</div>
				</div>
                                
                                </div>
                            </div>

<div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                              
	             <div class="spe-prods">
					<div class="mainbox">
						<h3>Smartphone</h3>
                        <img class="rotprod" src="img/products/p5.png" alt="">
					</div>
					<div class="price-big">
						<div>
							<div class="floatting-price">
								<h3>$500</h3>
							</div>
							<div class="month">
								<p>/ piece</p>
							</div>
						</div>
						<div class="ordersection">
								<a href="#" class="buybtn">Order</a>
						</div>
					</div>
				</div>
                                
                                </div>
                            </div>
                        </div>                    
                        <a class="left carousel-control" href="#productscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        
                        <a class="right carousel-control" href="#productscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> 
                    </div>
                </div>
                <div class="space">
                <a class="btn btn-danger btn-lg wow bounceIn" href="http://www.jquery-az.com/"><i class="icon-upload-alt"></i>Download Code</a>
                </div>
              </div>
          </div>