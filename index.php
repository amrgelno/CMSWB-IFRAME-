
<!DOCTYPE html>

<html lang="en" >

<head>

<?php

require_once("connect.php");

class index extends  condb{

public function sql(){

require_once'front/Headtagvue.php';

?>

</head>

<body onload='sendData();'
style="cursor: url('OIP.cur'), auto;"
data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

<div class="container-fluid ">

  <?php require_once('front\template\widget\widget.php') ?>

  <!--<div class="aos-init" data-aos="fade-up" data-aos-duration="1500" 
data-aos-delay="500" > welcome </div> -->

<!-- jquery script vuejs-->
<?php require_once ('front/template/loadingscreen/loadiingscreen.html') ;    ?>
<template>
<main>
<!--put Template tag to stop some jquery --> 
<M-section>
  
<?php require_once ('iframe/iframe.php') ;    ?>

</main></M-section> 
</template>

</app-frame>

</div>

<?php include('Routes/Routes.php');  ?>

<?php    #require_once('controllerview2.php'); ?> 

<?php
}
}

$use= new index();
$use->connectF();
$use->sql();
?>

</body>
<?php require_once('front/template/scripthref.html'); ?>
<script src="./assets/js/vue.global.js"></script>
<script src="./assets/js/vuejs.js"></script> 
<script src="./assets/js/vuetify.js"></script> 
<script src="./assets/js/swiper-bundle.min.js"></script>

<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>

<!--<script>
    document.addEventListener("contextmenu", (e) => {
      e.preventDefault();
    }, false);
    </script>-->
  
</html>






 
    