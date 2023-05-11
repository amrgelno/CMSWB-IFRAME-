<?php

error_reporting(0);

?>

<?php

include("../connect.php");

class controllerview extends  condb{

public function sql(){

  $pg_id=$_POST['pg_id'];

  //posting label name FK  COL  table  

  $Keywords=$_POST['keywords']; 
  $slider=$_POST['slider'];
  $cat=$_POST['cat'];
  $paragraph=$_POST['paragraph'];
  $static=$_POST['static'];
  $topic=$_POST['topic'];
  $Form=$_POST['Form'];  
  $cover=$_POST['cover'];
  $marque=$_POST['marque'];
  $video=$_POST['video'];
  $cardslider=$_POST['cardslider'];
  $Brand=$_POST['Brand'];

?>

new Vue({
	   
       el: "#vueapp",                          // Data Centre
            
          data: {  
            
                         // reterive data  with  php line    
   //vuetify: new Vuetify(),

<?php

require_once('Keywords/keywordsvue.php');

require_once('nav/nav.php');  

#require_once('slider/slidervue2.php');

require_once('slider/slidervue2.php');

require_once('cover/covervue.php');

require_once('marque/marquevue.php');

require_once('paragraph/paragraphVue.php');

require_once('static/staticvue.php');

require_once('form/formvue.php');

require_once('topic/topicvue.php');

require_once('video/videoVue.php');

require_once('Box/Boxvue.php');

require_once('Brand/Brandvue.php');

require_once('slidercard/cardslidervue.php');

require_once('footer/footervue.php');


//require_once('schema/schema.php');


   ?>      

},methods:{

  toggle:function(event){

    event.target.classList.toggle('display')


    }
 
 }


        })
   
       


        <?php
}
}

$use= new controllerview();
$use->connectF();
$use->sql();
?>