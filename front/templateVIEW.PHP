<!DOCTYPE html>
<!-- webpreview  UI -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
<title>template_view</title>
</head>
<style>

body {
    margin: 0;
}


iframe#laptop {
    border: 0;
    width: 100%;
}


#nav-tool>*{

text-align: center;


}

#tablet{

display: none;


}


#mobile{

display: none;


}

#laptop{

display: none;


}



#tablet:target{

display: block;


}


#mobile:target{

    display: block;


}

#laptop:target{

    display: block;


}

</style>
<body>
<div id="nav-tool" align="center" style="background-color:#999;" >  
    <span class="material-icons-outlined">
       <img src="Icon/mobile.jpg" width="25px" height="25px"> <a href='#tablet'> tablet </a>
        </span>
        <span class="material-icons-outlined" >
            <img src="Icon/OIP (2).jpg" width="25px" height="25px"><a href='#mobile'> mobile  </a>
            </span>
            <span class="material-icons-outlined">
                <img src="Icon/Laptop-icon-vector-Graphics-1.png "  width="25px" height="25px"><a href='#laptop'>  laptop </a>
                </span>
</div>

<div align="center"> <!--mobile view -->

    <iframe  src="template"  id="mobile" width="260px"  height="600px" > 
   

	  </iframe>
    
    <!--ipad view -->
    <iframe src="template" id="laptop" width="100%"  height="768px"> </iframe>


    <!-- <iframe src="index.php" id="laptop" width="1200px"  height="768px"> </iframe> -->

    
    <!--laptop view-->
    <iframe src="template"  id="tablet" width="1024px"  height="600px"> 
</iframe>

</div>




</body>
</html>



<script>


new Vue({ 
    
    el: "#vueapp", {
    isdisplay:false,
     show:true,  
        
        Dropmenu:[ 
{footer:'',Micon: 'pen_stroke_sketch_doodle_lineart_67-128.png', itemphref:'Blog?MainM_ID=1',img:'IMG/pen_stroke_sketch_doodle_lineart_67-128.png', sub1menu:'Huis'}, 

{footer:'',Micon: 'TRANS2.png', itemphref:'Blog?MainM_ID=2',img:'IMG/TRANS2.png', sub1menu:'OVER ONS'}, 
{footer:'',Micon: 'images copy.pngorful-icon-symbol-premium-quality-vector-17405189.png', itemphref:'Blog?MainM_ID=4',img:'IMG/categories-colorful-icon-symbol-premium-quality-vector-17405189.png', sub1menu:'Meest recente berichten'}, 
],
      submenu:[ 
{footer:'',Micon: '',img:'IMG/', itemphref:'Blog?MainM_ID=19', sub1menu:'FLCO'}, 
{footer:'',Micon: '',img:'IMG/', itemphref:'Blog?MainM_ID=10', sub1menu:'plasterer'}, 
{footer:'',Micon: '',img:'IMG/', itemphref:'Blog?MainM_ID=9', sub1menu:'gipsplaat'},
{footer:'',Micon: '',img:'IMG/', itemphref:'Blog?MainM_ID=8', sub1menu:'Cine wall'}, 
{footer:'',Micon: '',img:'IMG/', itemphref:'Blog?MainM_ID=7', sub1menu:'tagel'}, 
{footer:'',Micon: '',img:'IMG/', itemphref:'Blog?MainM_ID=6', sub1menu:'stukadoor'},
{footer:'',Micon: '',img:'IMG/', itemphref:'Blog?MainM_ID=5', sub1menu:'Schilder'}, 
], 
       
     TREMENU:[ ], 
       sliderB:
       [ 
{largeslide2:'IMG/ezgif.com-gif-maker (24).gif', largetitle2:'trustKlusbedrijf',slide_id:'currentDiv(1)'}, 
{largeslide2:'IMG/ezgif.com-gif-maker (21).gif', largetitle2:'trustKlusbedrijf',slide_id:'currentDiv(2)'}, 
{largeslide2:'IMG/ezgif.com-gif-maker (22).gif', largetitle2:'trustKlusbedrijf',slide_id:'currentDiv(3)'}, 
],

       Marquee: [ ] ,
       Paragraph:[ ] , 
       static:[ ],
       Topic:[ ],
       vcat:[ ],
       cat:[ ], 
Email:'Info@trust-bedrijf.nl', Tele_Number:'633330410', Telehref:'https://api.whatsapp.com/send?phone=633330410', street:'jagerskamp 15 westvoort 6932 BV', LOGO:'IMG/yourlogo.png', nav:[ {Link_M:'index.php?MainM_ID=7', sub1menu:'tagel'},
{Link_M:'index.php?MainM_ID=6', sub1menu:'stukadoor'}, 
{Link_M:'index.php?MainM_ID=5', sub1menu:'Schilder'}, 
{Link_M:'index.php?MainM_ID=3', sub1menu:'CONTACT'}, 
{Link_M:'index.php?MainM_ID=2', sub1menu:'OVER ONS'}, 
{Link_M:'index.php?MainM_ID=1', sub1menu:'Huis'}, 
{Link_M:'index.php?MainM_ID=8', sub1menu:'Cine wall'}, 
{Link_M:'index.php?MainM_ID=9', sub1menu:'gipsplaat'}, 
{Link_M:'index.php?MainM_ID=10', sub1menu:'plasterer'}, 
{Link_M:'index.php?MainM_ID=19', sub1menu:'FLCO'}, 
], 
        social:[ 
            {links:'https://www.facebook.com ', ICON:'IMG/facebook.png' }, 
            {links:'https://www.linkedin.com ', ICON:'IMG/linkedin.png' }, 
            {links:'https://www.youtube.com ', ICON:'IMG/Youtube.png' }, 
            {links:'https://www.twitter.com ', ICON:'IMG/twitter.png' }, ], }
        ,methods:{ toggle:function(event){ event.target.classList.toggle('display') } } 
    })

        </script>