<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
-->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/css/v4-shims.css" />
<link rel="stylesheet" href="assets/css/v4-shims.min.css" />
<link rel="stylesheet" href="assets/css/regular.min.css" />
<link rel="stylesheet" href="assets/css/gh-buttons.css" />
<link href="assets/css/mediaQuery.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="assets/css/fxlayout.css" />
<link rel="stylesheet" href="assets/css/all.css" />
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/prism.css" />
<link rel="stylesheet" href="assets/css/regular.min.css" />
<link rel="stylesheet" href="assets/css/svg-with-js.css" />
<!--<link rel="stylesheet" href="assets/css/svg-with-js.min.css" />-->
<link rel="stylesheet" href="assets/css/brands.css" />
<link rel="stylesheet" href="assets/css/brands.min.css" />
<!--<link rel="stylesheet" href="assets/css/bootstrap.min.css" />-->
<link rel="stylesheet" href="assets/css/solid.css" />
<link rel="stylesheet" href="assets/css/responsive.css" />
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

<?php
?>

<!--meta tag (customize) -->

<?php


if(empty($_GET)){


$info=$this->connectF()->query("select * from keywords where ID=(select MIN(id) from company)");

while($row=mysqli_fetch_object($info)){
?>
<meta name="title" content="<?php echo $row->title  ?>">
<meta name="description" content="<?php echo $row->description  ?>">
<meta name="keywords" content="<?php echo $row->Keyword  ?>">
<meta name="author" content="<?php echo $row->author  ?>">
<?php
}

}

if(@$_GET['MainM_ID'] )  {   #MAIN_MENU ID	


@$MAIN_ID=$_GET['MainM_ID'];	

$info=$this->connectF()->query("select * from keywords where  Page_ID='$MAIN_ID'");

while($row=mysqli_fetch_object($info)){
?>
<meta name="title" content="<?php echo $row->title  ?>">
<meta name="description" content="<?php echo $row->description  ?>">
<meta name="keywords" content="<?php echo $row->Keyword  ?>">
<meta name="author" content="<?php echo $row->author  ?>">
<?php
}
}

elseif(@$_GET['box_ID'] ){

$box_ID=$_GET['box_ID'];

$info=$this->connectF()->query("select * from keywords where  Box_ID='$box_ID'");

while($row=mysqli_fetch_object($info)){
?>
<meta name="title" content="<?php echo $row->title  ?>">
<meta name="description" content="<?php echo $row->description  ?>">
<meta name="keywords" content="<?php echo $row->Keyword  ?>">
<meta name="author" content="<?php echo $row->author  ?>">
<?php
}
}
elseif(@$_GET['Topic_ID'] ){

$relatedtopic_id=$_GET['Topic_ID'];

$info=$this->connectF()->query("select * from keywords where TOPIC_ID='$relatedtopic_id'");

while($row=mysqli_fetch_object($info)){
?>
<meta name="title" content="<?php echo $row->title  ?>">
<meta name="description" content="<?php echo $row->description  ?>">
<meta name="keywords" content="<?php echo $row->Keyword  ?>">
<meta name="author" content="<?php echo $row->author  ?>">
<?php
}
}    
?>
<meta name="robots" content="index, follow">
<meta name="language" content="Arabic">
<!--<link href="styles.css" rel="stylesheet" type="text/css" />-->
<!-- Ui frame work -->
<link rel="stylesheet" type="text/css" href="assets/css/bz.css">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type'text/css'>
<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link href="assets/css/boot-strap.css" rel="stylesheet"> -->
<!-- end Ui framework -->
<meta name="google-site-verification" content="345j2ZtzsXdrvjZzjlA2mCbn7ou5hYTcnIdhISWOPAA" />
<script src="assets/js/scrollbox.min.js"></script>
<script src="assets/js/scrollbox.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/typed.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/typed.min.js.map"></script>
<script src="assets/js/jquery-1.11.0.min.js"></script>
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
<script src="assets/js/home.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/vuejs.js"></script>
<script src="assets/js/vuetify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="jquery.counterup.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>

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

<?php
$sel="select * from company where ID=(select MAX(id) from company)";

$logo=$this->connectF()->query($sel);

while($row=mysqli_fetch_object($logo)){

$photo=$row->path_pic;

if(!empty($photo)){

?>   
<link rel='shortcut icon' type='image/ico' href='IMG/<?php echo $photo ?>' > 

<?PHP 
}
}
?>
</head><!-- end head -->

<title><?php


if(empty($_GET)){


$info=$this->connectF()->query("select * from keywords where ID=(select MIN(id) from company)");

while($row=mysqli_fetch_object($info)){

echo $row->title ; 

}

}

if(@$_GET['MainM_ID'] )  {   #MAIN_MENU ID	


@$MAIN_ID=$_GET['MainM_ID'];	

$info=$this->connectF()->query("select * from keywords where  Page_ID='$MAIN_ID'");

while($row=mysqli_fetch_object($info)){

echo $row->title ; 

}
}

elseif(@$_GET['box_ID'] ){

$box_ID=$_GET['box_ID'];

$info=$this->connectF()->query("select * from keywords where  Box_ID='$box_ID'");

while($row=mysqli_fetch_object($info)){

echo $row->title ; 

}
}
elseif(@$_GET['Topic_ID'] ){

$relatedtopic_id=$_GET['Topic_ID'];

$info=$this->connectF()->query("select * from keywords where TOPIC_ID='$relatedtopic_id'");

while($row=mysqli_fetch_object($info)){

echo $row->title ; 

}
}    
?></title>

<style>

.displaynav{

display:block;

}

</style>


