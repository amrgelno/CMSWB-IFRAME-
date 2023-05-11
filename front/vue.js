new Vue({ el: "#vueapp",


// Data Centre 


data: { 



     title: "عنوان الصفحة ",
      description:"وصف الصقحة ",
       keyword:"كلمات المفتاحية", 
       author:"أسم مولف ",
       

       
       isdisplay:false, 
       show:true,




        Dropmenu:[ 

{footer:'',Micon: 'pen_stroke_sketch_doodle_lineart_67-128.png', itemphref:'Blog?MainM_ID=1',img:'IMG/pen_stroke_sketch_doodle_lineart_67-128.png', sub1menu:'Huis'}, 
{footer:'',Micon: 'TRANS2.png', itemphref:'Blog?MainM_ID=2',img:'IMG/TRANS2.png', sub1menu:'OVER ONS'},
{footer:'',Micon: 'images copy.png', itemphref:'Blog?MainM_ID=3',img:'IMG/images copy.png', sub1menu:'CONTACT'}, 
{footer:'4',Micon: 'categories-colorful-icon-symbol-premium-quality-vector-17405189.png', itemphref:'Blog?MainM_ID=4',img:'IMG/categories-colorful-icon-symbol-premium-quality-vector-17405189.png', sub1menu:'Meest recente berichten'}, 
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

embed_slider:"1",
                    //objectdata
 sliderB:[
{largeslide2:'IMG/ezgif.com-gif-maker (24).gif', largetitle2:'trustKlusbedrijf',slide_id:'currentDiv(1)'}, 
{largeslide2:'IMG/ezgif.com-gif-maker (21).gif', largetitle2:'trustKlusbedrijf',slide_id:'currentDiv(2)'}, 
{largeslide2:'IMG/ezgif.com-gif-maker (22).gif', largetitle2:'trustKlusbedrijf',slide_id:'currentDiv(3)'}, ]
,

Marquee: [ 
    
    {News:"adasdsadsad"}, 
] ,


Paragraph:[ ] ,

static:[ ], 

form : ' ' ,

Topic:[ 
    {Topic_IMG:'IMG/Schilder.jpg',
     Topic_ID:'Blog?Topic_ID=1', Topic_subject:'asdasdasd',
     Topic_content:'You can position the text box anywhere in the document. Use the Drawing Tools tab to change the formatting of the pull quote text box.]'},
],

vcat:[ ],
cat:[ {catheadline:"Meest recente berichten",ID:"1"}, 
{cat_img:"IMG/Schilder.jpg", cat_box_ID:"Blog?box_ID=1" , imgb:"imgb1", titleb:"titleb1", hoveron:"hover1", hideon:"hide1", show:false, cat_title:"Schilder"}, 
{cat_img:"IMG/stukadoor.jpeg", cat_box_ID:"Blog?box_ID=2" , imgb:"imgb2", titleb:"titleb2", hoveron:"hover2", hideon:"hide2", show:false, cat_title:"stukadoor"}, 
{cat_img:"IMG/tagel.jpg", cat_box_ID:"Blog?box_ID=3" , imgb:"imgb3", titleb:"titleb3", hoveron:"hover3", hideon:"hide3", show:false, cat_title:"tagel"}, 
{cat_img:"IMG/gipsplaat.jpg", cat_box_ID:"Blog?box_ID=4" , imgb:"imgb4", titleb:"titleb4", hoveron:"hover4", hideon:"hide4", show:false, cat_title:"gipsplaat"}, 
{cat_img:"IMG/stukadoor-pp.jpg", cat_box_ID:"Blog?box_ID=5" , imgb:"imgb5", titleb:"titleb5", hoveron:"hover5", hideon:"hide5", show:false, cat_title:"plasterer"}, ],
 Email:'Info@trust-bedrijf.nl', Tele_Number:'633330410', Telehref:'https://api.whatsapp.com/send?phone=633330410', street:'jagerskamp 15 westvoort 6932 BV', LOGO:'IMG/yourlogo.png', 
 nav:[ {Link_M:'index.php?MainM_ID=7', sub1menu:'tagel'}, {Link_M:'index.php?MainM_ID=6', sub1menu:'stukadoor'},
  {Link_M:'index.php?MainM_ID=5', sub1menu:'Schilder'},
   {Link_M:'index.php?MainM_ID=3', sub1menu:'CONTACT'},
   {Link_M:'index.php?MainM_ID=2', sub1menu:'OVER ONS'}, 
   {Link_M:'index.php?MainM_ID=1', sub1menu:'Huis'}, 
   {Link_M:'index.php?MainM_ID=8', sub1menu:'Cine wall'}, 
   {Link_M:'index.php?MainM_ID=9', sub1menu:'gipsplaat'}, 
   {Link_M:'index.php?MainM_ID=10', sub1menu:'plasterer'},
    {Link_M:'index.php?MainM_ID=19', sub1menu:'FLCO'}, ], 
    social:[ {links:'https://www.facebook.com ', ICON:'IMG/facebook.png' }, 
    {links:'https://www.linkedin.com ', ICON:'IMG/linkedin.png' }, 
    {links:'https://www.youtube.com ', ICON:'IMG/Youtube.png' },
    {links:'https://www.twitter.com ', ICON:'IMG/twitter.png' }, ], }
    ,methods:{ toggle:function(event){ event.target.classList.toggle('display') } } })