<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"/>
<?php require_once('front/template/csshref.html'); ?>
 <?php #require_once('front/template/scripthref.html'); ?> 
<!--Open Graph Protocol-->
<html prefix="og: https://ogp.me/ns#">
<meta property="og:locale" content="ar_AR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="  " />
<meta property="og:description" content=" " />
<meta property="og:url" content="http://domainsite.net/" />
<meta property="og:site_name" content="   " />
<meta property="article:modified_time" content="2020-07-23T06:20:03+00:00" />
<meta property="og:image" content="  " />
<meta property="og:image:width" content="570" />
<meta property="og:image:height" content="380" />
<!--Twitter Cards-->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content=" " />
<!--meta tag (customize) -->
<meta name="robots" content="index, follow">
<meta name="language" content="Arabic">
<!--End meta tag (customize) -->
<!--<link href="styles.css" rel="stylesheet" type="text/css" />-->
<!-- Ui frame work -->
<link rel="stylesheet" type="text/css" href="assets/css/bz.css">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type'text/css'>
<!-- <link href="assets/css/vuetify.min.css" rel="stylesheet"> -->
<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link href="assets/css/boot-strap.css" rel="stylesheet"> -->
<!-- end Ui framework -->

<!--<script src="jquery.counterup.js"></script> 
<script src="assets/js/scrollbox.min.js"></script>
/scrollbox.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/typed.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/typed.min.js.map"></script>
<script src="assets/js/bootstrap.bundle.min.js.download"></script>
<script src="assets/js/transforms3d.js"></script>
<script src="assets/js/silver_track.js"></script>
<script src="assets/js/navigator.js" ></script>
<script src="assets/js/bulletnavigator.js"></script>
<script src="assets/js/hubconnector.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/circularnavigator.js" ></script>
<script src="assets/js/script.js" ></script>
<script src="assets/js/scripts.js" ></script>
<script src="assets/js/recipe.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>-->
<!-- <script src="./assets/js/vuejs.js"></script>
<script src="./assets/js/vuetify.js"></script> -->

<meta name="google-site-verification" content="345j2ZtzsXdrvjZzjlA2mCbn7ou5hYTcnIdhISWOPAA" />
<app-frame id='vueapp'>
<meta name="title"       :content="title">
<meta name="description" :content="description">
<meta name="keywords"    :content="keyword">
<meta name="author"      :content="author">
<!--<script type="application/ld+json">

[{
"@context": "https://schema.org/",
"@type": "Recipe",
"name": "websitename_Recipe",
"description": "website description"
},
{
"@context": "https://schema.org",
"@type": "BreadcrumbList",
"itemListElement": [

<?php
$MAIN_ID=1;
$SELECT="select * From  box  Where ID < (SELECT MAX(id) FROM  box Where  Box_id ='$MAIN_ID' ) ORDER BY  box.ID ASC";
$boxquery=$this->connectF()->query($SELECT);
while($column=mysqli_fetch_object($boxquery)){
?>

{
  "@type": "ListItem",
  "position": <?php echo $column -> ID;?>,
  "name": "Recipes",
  "item": "https://asphallt.net?/Blog/box_ID=<?php echo $column -> ID?>"
},

<?php
}
?>
-->
<!-- </script> -->
<link rel='shortcut icon' type='image/ico' :href='LOGO' > 

</head><!-- end head -->

<title>{{title}}</title>



