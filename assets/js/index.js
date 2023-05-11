
$(document).ready(function(e) {
$("#menuico").click (function(){
	$("#MENUBEFORE").css({top:"8px"});
	$("#MENUBEFORE").css({transform:"rotate(45deg)"});
	$("#menuico").css({transform:"rotate(-45deg)"});
	$("#MENUAFTER").css({display:"none"});
	$(".nav").fadeIn();
	    		
});	
});
    
$(document).ready(function(e) {
$("#MENUBEFORE").click (function(){
	$("#MENUBEFORE").css({top:"-1px"});
	$("#MENUBEFORE").css({transform:"rotate(0deg)"});
	$("#menuico").css({transform:"rotate(0deg)"});
	$("#MENUAFTER").css({display:"block"});
    $(".nav").fadeOut();	    		
});	
});

	$(document).ready(function(e) {
	$(window).scroll(function(){
	//if($(window).scrollTop() >= $('.menu_v ').offset().top){
	$('.active').click();
	
			//								   }		
					   });
					   });
	

 jQuery(document).ready(function ($){
$(window).scroll(function(){
	if($(window).hover){
		//$(".content-slider").fadeToggle();
	$(".content-slider").lightSlider({
							auto:true,
							loop:true,
							speed:'7700',
							pauseOnHover: true,
							keyPress:false,
							thumbItem:false,
							pagination:false,
							responsive : [
							
                                 {
								breakpoint:700,

									settings: {
										item:1,
										slideMove:4,
											slideMargin:4,
									  }
									
									},
									
									{
									breakpoint:800,
									
										settings: {
											item:1,
											slideMove:4,
											slideMargin:4,
										  }
									
									},
									{
										breakpoint:920,
										settings: {
											item:1,
											slideMove:4,
											slideMargin:4,
										  }
									},

							],
							onSliderLoad: function() {
								$('.content-slider').removeClass('lSPager lSpg');
							}  
						});
					}
						});
						
					  });



					  jQuery(document).ready(function ($){
						$(window).scroll(function(){
	if($(window).scrollTop() >= $('#serv').offset().top){

					  var swiper = new Swiper(".mySwiper", {
						// Optional parameters
								// slidesPerView: 2,
								//slidesPerGroup:1,
								 cursorChar:'pointer',
								 centerSlide:'true',
								 spaceBetween: 10,
								 fade:false,
								 loopFillGroupWithBlank:true,
								//direction: 'vertical',
								direction: 'horizontal',
								 loop:true,
								pagination: {
								  el: ".swiper-pagination",
								  clickable: true,
								},
							
						navigation: {
							nextEl: '.swiper-button-next',
							prevEl: '.swiper-button-prev',
						  },
						
						breakpoints:{
						0:{
						
						slidesPerView: 1,
						
						},
						
						
						520:{
						
						slidesPerView: 3,
						
						},
						920:{
						slidesPerView:3,
						},
						
						},
							  });




							}
						});
						
					  });


if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.paragraph').offset().top){
$(".categories").css({opacity:"5",transition:"all 2s ease"},1000);
// $('.active').click();

										   }
										   else{
											   
$(".categories").css({opacity:"0",transition:"all 2s ease"});	

										   }
				   });
				   });
}
  


if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.paragraph').offset().top){
$(".categories").css({opacity:"1",transition:"all 2s ease"},1000);
										   }
										   else{
											   
$(".categories").css({opacity:"0",transition:"all 2s ease"});	

										   }
				   });
				   });
}
 


if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.categories').offset().top){
$(".topic").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{
											   
$(".topic").css({opacity:"0",transition:"all 2s ease"});	

										   }
				   });
				   });
}
          


if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.categories').offset().top){
$(".topic").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{
											   
$(".topic").css({opacity:"0",transition:"all 2s ease"});												   
											   
										   }
				   });
				   });
}
  




if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.topic').offset().top){
$(".form").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										   else{
											   
$(".form").css({opacity:"0",transition:"all 2s ease"});	

										   }
				   });
				   });
}
          


if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('.topic').offset().top){
$(".form").css({opacity:"5",transition:"all 2s ease"},1000);
										   }
										  
				   });
				   });
}
  


if($(window).width()>= 1024){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('#cat').offset().top){
$("#cat").animate({opacity:"1",left:"10px",transition:"all 2s ease"},1000);
										   }
				   });
				   });
}


if($(window).width()<= 767){
$(document).ready(function(e) {
$(window).scroll(function(){
if($(window).scrollTop() >= $('#cat').offset().top){
$("#cat").css({opacity:"1",transition:"all 2s ease"},1000);
										   }
										   
else{

$("#cat").css({opacity:"0",transition:"all 2s ease"},1000);

}
										   
				   });
				   });
}



function shut() {


document.getElementById('shuttle').style='background-image:url(../img/shuttle.png);'


}


if($(window).width()<= 767){

$(document).ready(function(e) {
$("#shuttle").click(function(){
$("#shuttle").animate({top:"-10000px"},9000);
																  
				   }); 
				   });
}

// $(document).ready(function(e) {

$("#scroll-top").click(function(){

$("html,body").animate({scrollTop:$('#carouselExampleCaptions').offset().top},15000);   

});
//  });



$(document).ready(function(e) {
    $(".loadingbg").delay(1000).fadeOut()
		
});

    
$(document).ready(function(){
    $("#loader").delay(3500).fadeOut("fast");   
    });


if($(window).width()>= 767){

$(document).ready(function(e) {
$("#shuttle").click(function(){
$("#shuttle").animate({top:"-10000px"},9000);
																  
				   }); 
				   });
}

if($(window).width()>= 1024){

$(document).ready(function(e) {
$("#shuttle").click(function(){
$("#shuttle").animate({top:"-10000px"},20000);

																  
				   }); 
				   });
}


let started = false;

$(window).scroll(function(){

let nums = document.querySelectorAll(".counter"); 

 // Function Started ? No window.onscroll = function ()
 if($(window).scrollTop() >= $('.paragraph').offset().top){

		if (!started)
		{ nums.forEach((num) => startCount(num)); } started = true; }
	});


function startCount(el) { 
	let target = el.dataset.target; 
	let ourcounter = setInterval(() => 
	{ el.textContent++; 
		if (el.textContent === target) { clearInterval(ourcounter); } }, 2000 / target); }

		$(window).scroll(function(){

	if($(window).scrollTop() >= $('.slider').offset().top){


var ourcounter=setInterval(function(){ 
	
	var counter=parseInt($('.counter').html() );           //تخزين قيمة 10
	
	var countend=parseInt($('.targetval').html() );           //تخزين قيمة 10
	//var  href= $('.href').html() ;   //    تخزين لينك    
	 if(counter < countend ){
		 
		$('.counter').text(counter+1);                          //true
		
		 }else{
		clearInterval(ourcounter);	 
		 }
	},2550);
	}

});

// setInterval(function() { 
// 	$('Slideshow.item > slideimg:first ')
// 	  .fadeOut(5000)
// 	  .next()
// 	  .fadeIn(4000)
// 	  .appendTo('Slideshow.item');},9000);	

$(window).scroll(function(){
	if($(window).scrollTop() >= $('.footer').offset().top){
	
AOS.init({
	easing: 'ease-in-out-sine'
  });
	}
});


// const links = document.querySelectorAll('.navlink');
    
// if (links.length) {
//   links.forEach((link) => {
//     link.addEventListener('click', (e) => {
//       links.forEach((link) => {
//           link.classList.remove('active');
//       });
//     //   e.preventDefault();
//       link.classList.add('active');
//     });
//   });
// }