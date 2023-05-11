<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, ">
<link href="CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<title>new topic</title>
</head>
<style type="text/css">
.job{
width:500px;
height:50px;
background:#0FF;
}

</style>
<body bgcolor="darkkhaki">

<div id="loader">
<div class="logo" align="center"><img src="ICON/viewweb.png" class="loading-logo"/><h1> Build your Page With Customize page Web Tool           </h1>
<br/>
من خلال أداة بناء محتوى يمكنك تصميم محتوى فريدة و تحريره وبناء قالبك مع أداوت تخصيص الصفحة
<br/>
<div class='preloader' align="center" ><img src="ICON/wpspin-2x.gif" class="loading-logo" align="center"/>  </div>
<hr/>
</div>
 </div>


<?php


include("connect.php");


class topic extends  condb{


public function sql(){


@$MAIN_ID=$_POST['MainM_ID'];
$select= "SELECT * from submenu  where  submenu.ID = $MAIN_ID";
#$query =  $this->connectF()->query($select);

$query=$this->connectF()->query($select);

while($column= mysqli_fetch_object($query)){
?>
<div class="watch-video"><button id="Paragraph-bt" STYLE="background:#000;" /><a href="CMS_VIDEO/insparag.mp4" target="_blank" style="color:#FFF;">HOW TO USE</a></button></div>
<img src="ICON/Paragraph.png" class="Paragraph-img"/>
<h1 class="Paragraph-button">  Paragraph&title  </h1> 
<!--<div class="ParagraphOpen-buttor"> >> </div> <div class="ParagraphClose-buttor"> <<  </div>  -->
<div class="Paragraph-title">
<form action="newtopic.php" method="post">
<input type="hidden"  name="MainM_ID"   value="<?PHP echo $column->ID?>"/>
<textarea name="Paragraph" cols="1" rows="1"></textarea>
<input type="submit"  name="send"  value="send"  class="send"/>
</form>
<form action="Editpragraph.php"  method="post">
<input type="hidden"  name="MainM_ID"   value="<?PHP echo $column->ID?>"/>
<input type="submit"   name="Edit"   value="Edit"  class="edit"/>
</form>
</div>
<script>
$(document).ready(function(){
 $(".Paragraph-button").click(function(){
 $(".Paragraph-title").slideToggle(2000); 
 /*$("#MENUAFTER").css({display:"none"});*/   
});     
});
</script>
<hr/>
<img src="ICON/ArticleES.png" class="Article-img"/> 
<div class="watch-video"><button id="Article&topic-bt" STYLE="background:#000;" /><a href="CMS_VIDEO/instopic.mp4" target="_blank" style="color:#FFF;">HOW TO USE</a></button></div>
<h1 class="Article-bt"> Article&topic </h1><!--<div class="topicopen-buttor"> >> </div> <div class="topicClose-buttor"> << </div>-->
<div class="Article">
<form action="newtopic.php" method="post" enctype="multipart/form-data">
<input type="hidden"  name="MainM_ID"   value="<?PHP echo $column->ID?>"/>
<input type="text" name="subject"   placeholder="newsubject" />
<br /><br />
<br />
<textarea type="text"   name="textarea"  placeholder="insert new topic here" cols="40" rows="10"></textarea>
<input type="file"  name='upload'   value="search for a file" />
<br /><br />
<br />
<input type="submit"  name="submit" value="send"  class="send2"  />
</form>
<form action="edittopic.php" method="post">
    <input type="hidden" name="MainM_ID" VALUE="<?PHP echo $column->ID?>">
    <input type="SUBMIT" name="INSERT" VALUE="EDIT_TOPIC" class="EDIT_TOPIC">
    </form>
</div>
<script>
$(document).ready(function(){
 $(".Article-bt").click(function(){
 $(".Article").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
});     
});
</script>
    <hr/>
<img src="ICON/dribbble-categories.png" class="Boxes-img"/>    
<div class="watch-video"><button id="Boxes&categeory-bt" STYLE="background:#000;" /><a href="CMS_VIDEO/categories.mp4" target="_blank" style="color:#FFF;"> HOW TO USE</a></button></div>
<h1 class="Box-bt"> categeories </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
 <div class="Boxes">
<form name="BOXScript">
<input type="text"     name="cat_Name"  placeholder="cat_Name" id="cat"  />  
<input type="number"   name="count"    id="count"   placehoder="insert number image"/>
<input type="submit"  name="addMORE"  value="+"  onclick="addval();"/>
</form>
<form name="updatebox"  action="Editbox.php"  method="post">
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input type="submit"  name="submit"  value="updateBox" class="EDIT_TOPIC" />
</form>
</div>
<script>
$(document).ready(function(){
 $(".Box-bt").click(function(){
 $(".Boxes").slideToggle(2000); 
 /*$("#MENUAFTER").css({display:"none"});*/     
});     
});
</script>
<hr/>
<script>
function addval(){
var x=document.getElementById('count').value;
var s=document.getElementById('cat').value;
var  F="<form action='newtopic.php' name='form' method='post' enctype='multipart/form-data'>";
var  m="<input type='text' name='boxtitle[]' placeholder='boxshow caption'/>";
var y="<input type='file'  name='boxshow[]'  value='search for a file' />";
for(i=1;i<=x;i++){
document.write(' '+F+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
document.write("<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>");
document.write("<input type='hidden'  name='counter'>");
document.form.counter.value=x;
document.write("<input type='text'  name='cat'>");
document.form.cat.value=s;
document.write("<input type='submit'  name='Adder'  value='addimage'/>");
document.write('<form/>');
}
</script>
<img src="ICON/slideshow.png" class="slideshow-img"/>    
<div class="watch-video"><button id="slideshow-bt"  STYLE="background:#000;"  /><a href="CMS_VIDEO/slideshow.mp4" target="_blank" style="color:#FFF;"> HOW TO USE</a></button></div>
<h1 class="slideshow-bt"> slideshow </h1><!--<div class="slideshowOpen-buttor"> >> </div> <div class="slideshowclose-buttor"> << </div>-->
<div class="slideshow">
<form name="slideshowscript">
<input type="number"   name="counter"    id="counter"   placehoder="insert number image"/>
<input type="submit"  name="submit"  value="+Addslide" onclick="addmore();"/>
</form>
<form name="updateslide"  action="editslide.php"  method="post">
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input type="submit"  name="submit"  value="updateslider"  class="EDIT_TOPIC" />
</form>
</div>
<script>
$(document).ready(function(){
 $(".slideshow-bt").click(function(){
 $(".slideshow").slideToggle(2000);    
/*$("#MENUAFTER").css({display:"none"});*/  
});     
});
</script>
<script>
function addmore(){
var x=document.getElementById('counter').value;  //counter_Number
var  F="<form action='newtopic.php' name='form'  method='post' enctype='multipart/form-data'>";
var  m="<input type='text' name='slidetitle[]'   placeholder='slideshow caption'/>";
var y="<input type='file'  name='uploadslide[]'  value='search for a file' />";
for(i=1;i<=x;i++){
document.write(' '+F+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
document.write("<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>");

document.write("<input type='hidden'  name='countnum' >");
document.form.countnum.value=x;
document.write("<input type='submit'  name='Add'  value='addimage'/>");
document.write('<form/>');
}
</script>

 <hr/>
<img src="ICON/dribbble-categories.png" class="Boxes-img"/>    
<div class="watch-video"><button id="Boxes&categeory-bt" STYLE="background:#000;" /><a href="CMS_VIDEO/categories.mp4" target="_blank" style="color:#FFF;"> HOW TO USE</a></button></div>
<h1 class="static-bt"> static info </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
 <div class="staticV">
<form name="staticScript">
<input type="text"     name="static_Name"  placeholder="static_Name" id="staticcat"  />  
<input type="number"   name="staticcount"    id="staticcount"   placehoder="insert number static"/>
<input type="submit"  name="addMORE"  value="+"  onclick="Addstatic();"/>
</form>
<form name="updatebox"  action="Editstatic.php"   method="post">
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input type="submit"  name="submit"  value="updateBox" class="EDIT_TOPIC" />
</form>
</div>
<script>
$(document).ready(function(){
 $(".static-bt").click(function(){
 $(".staticV").slideToggle(2000); 
 /*$("#MENUAFTER").css({display:"none"});*/     
});     
});
</script>

<script>
function Addstatic(){
var xl=document.getElementById('staticcount').value;
var sl=document.getElementById('staticcat').value;
var  Fl="<form action='newtopic.php' name='form' method='post' enctype='multipart/form-data'>";
var  ml="<input type='text' name='statictitle[]' placeholder='statictitle'/>";
var nl="<input type='text'  name='staticNum[]'  placeholder='static_num'/>"; 
var yl="<input type='file'  name='staticshow[]'  value='search for a file' />";  
for(i=1;i<=xl;i++){
document.write(' '+Fl+yl+ml+'   '+nl);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
document.write("<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>");
document.write("<input type='hidden'  name='counter'>");
document.form.counter.value=xl;
document.write("<input type='text'  name='staticcat'>");
document.form.staticcat.value=sl;
document.write("<input type='submit'  name='Addstatic'  value='Addstatic'/>");
document.write('<form/>');
}
</script>

<hr/>
<img src="ICON/Image_playback-512.png" class="videocat-img"/> 
<h1 class="video-bt"> video  categeory </h1>
<!--<div class="videocatOpen-buttor"> >> </div>  <div class="videocatClose-buttor"> << </div>--> 
<div class="video-cat">
<form name="vidoScript">
<input type="text"     name="cat_VIDO"  placeholder="cat_Name" id="catvido"  />  
<input type="number"   name="countnum"    id="countnum"   placehoder="insert number image"/>
<input type="submit"  name="addMORE"  value="+"  onclick="addvido();"/>
</form>
<form name="EditVideo"  action="EditVideo.php"  method="post">
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input type="submit"  name="submit"  value="updateVIDEO" class="EDIT_TOPIC" />
</form>
</div>
<script>
$(document).ready(function(){
 $(".video-bt").click(function(){
 $(".video-cat").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
});     
});
</script>


<hr/>
<script>
function addvido(){
var x=document.getElementById('countnum').value;
var s=document.getElementById('catvido').value;
var  F="<form action='newtopic.php' name='form' method='post' enctype='multipart/form-data'>";
var  m="<input type='text' name='vidotitle[]' placeholder='boxshow caption'/>";
var y="<input type='file'  name='vidoshow[]'  value='search for a file' />";
for(i=1;i<=x;i++){
document.write(' '+F+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
document.write("<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>");
document.write("<input type='hidden'  name='counters'>");
document.form.counters.value=x;
document.write("<input type='text'  name='category'>");
document.form.category.value=s;
document.write("<input type='submit'  name='AddVIDO'  value='Addvideo'/>");
document.write('<form/>');
}
</script>


<img src="ICON/banner_carrousel_slider_images_ad_promotion-512.png" class="cover-img"/> 
<h1 class='cover-bt'>coverimage </h1>
<!--<div class="coverOpen-buttor"> >> </div>  <div class="coverClose-buttor"> << </div>-->
<div class="cover">
<form action="newtopic.php" method="post" enctype="multipart/form-data">
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input name="coverimage" type="file"  value="uploadfile"  />
<input name="cover" type="submit" value="insert"  class="EDIT_TOPIC"/>
</form>
<form action="Editcover.php" method="post">
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input name="updatecover" type="submit"  value="change cover" class="EDIT_TOPIC"/>
</form>
</div>
<script>
$(document).ready(function(){
 $(".cover-bt").click(function(){
 $(".cover").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
});     
});
</script>
<hr/>
<img src="ICON/smm1.png" class="social-img"/> 
<h1 class="socialmedia-bt"> social media </h1><!--<div class="socialmediaOpen-buttor"> >> </div> <div class="socialmediaClose-buttor"> <<  </div>-->
<div class="social-media">
<form action="newtopic.php" method="post" enctype="multipart/form-data">
<input name="socialicon" type="file"  value="uploadfile"/>
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input  name="url"     type="url"   placeholder="insert your social link url" />
<input name="socail" type="submit" value="insert" class="EDIT_TOPIC" />
</form>
<form action="Editsocailmedia.php"  method="post" >
<input name="socail" type="submit" value="updatesociallink" class="EDIT_TOPIC" />
</form>
</div>
<script>
$(document).ready(function(){
 $(".socialmedia-bt").click(function(){
 $(".social-media").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
});     
});
</script>
<hr/>
<img src="ICON/internet-page-content-128.png" class="Marque"/> 
<h1 class="Marque-bt">  News Marque  </h1>
<!--<div class="MarqueOpen-buttor"> >> </div>  <div class="MarqueClose-buttor"> << </div>-->
<div class="Marqueline">
<form action="newtopic.php" method="post">
<input type="hidden"  name="MainM_ID"   value="<?PHP echo $column->ID?>"/>
<input type="text"    name="NewsMarque"  size="80px"  placeholder="newnews" />
<input type="submit"  name="Marque"  value="send"  class="send"/>
</form>
<form action="editMarque.php"  method="post" >
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input name="Marque" type="submit" value="updateNews Marque" class="EDIT_TOPIC" />
</form>
</div>
<script>
$(document).ready(function(){
 $(".Marque-bt").click(function(){
 $(".Marqueline").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
});     
});
</script>
<hr/>

<img src="ICON/seo2-91-128.png" class="Marque"/> 
<h1 class="KEYWORDS-bt"> Meta Generator(SEO TOOLS)  </h1>
<div class="KEYWORDS">
<form action="newtopic.php" method="post">
<input type="hidden"  name="MainM_ID"   value="<?PHP echo $column->ID?>"/>
<input type="text"    name="KEYWORD"  size="50px"  placeholder="KEYWORD  كلمات المفتاحية" /><br/> <br/>
<input type="text"    name="description"  size="80px"  placeholder="descriptionوصف الصفحة " />
<input type="text"    name="title"  size="50px"  placeholder="titleعنوان الصفحة " /> 
<input type="text"    name="author"  size="50px"  placeholder="authorأسم مؤلف" /> 
<input type="submit"  name="SEO"  value="send"  class="send"/>
</form>
<form action="editKeywords.php"  method="post" >
<input type='hidden'  name='MainM_ID'   value='<?PHP echo $column->ID?>'/>
<input name="Marque" type="submit" value="update Meta Generator" class="EDIT_TOPIC" />
</form>
</div>
<script>
$(document).ready(function(){
 $(".KEYWORDS-bt").click(function(){
 $(".KEYWORDS").slideToggle(2000);    
 /*$("#MENUAFTER").css({display:"none"});*/  
});     
});
</script>
<?php
}


?>
<?php

@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['upload']['tmp_name']);
@$subject=$_POST['subject'];
@$textarea=$_POST['textarea'];
@$content_id=$_POST['MainM_ID'];
#@$Image_path=addslashes(file_get_contents($_FILES['upload']['tmp_name']));
@$Image_name=$_FILES['upload']['name'];
@$Image_size=$_FILES['upload']['size'];  // bits size
@$Image_type=$_FILES['upload']['type'];

$topic="insert into topic (subject,content,ImageName,content_id) VALUES ('$subject','$textarea','$Image_name','$content_id')";

if(@$_POST['submit']){
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )  {
                                                                  
move_uploaded_file ($path,$dir.$Image_name);
# $this->connectF()->query($topic);
$this->connectF()->query($topic);

#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";
                                                               }
   else{
	
echo"<script> alert ('This not Image') </script>";	
		
          }
                  }
?>

<?php
/*$select="select * from slider";
#$query= $this->connectF()->query($select);*/
#$query=$this->connectF()->query($select);
@$counter=$_POST['countnum'];
 

for ($i = 0; $i<=$counter ; $i++)          { 
   @$dir=dirname(__FILES__)."/IMG/";
   @$path=($_FILES['uploadslide']['tmp_name'][$i]);
   @$slidetitle=$_POST['slidetitle'][$i];
   #$slider=implode(",",$slidetitle);
   @$slide_id=$_POST['MainM_ID'];
  #@$Image_path1=addslashes(file_get_contents($_FILES['uploadslide']['tmp_name'][$i]));
  @$Image_name1=($_FILES['uploadslide']['name'][$i]);
  @$Image_size=($_FILES['uploadslide']['size'][$i]);  // bits size
  @$Image_type=($_FILES['uploadslide']['type'][$i]);
#$col_id=implode(",",$Image_name);

$slider="insert into slider(title,ImageName,slide_id) VALUES ('$slidetitle','$Image_name1','$slide_id')";
 
if(@$_POST['Add']){
if($Image_type=='image/jpeg' or  $Image_type=='image/png' or  $Image_type=='image/gif'  )

                                                       {
move_uploaded_file ($path,$dir.$Image_name1);
# $this->connectF()->query($slider);

$this->connectF()->query($slider);

#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";

                }
else {
	
echo"<script> alert ('This not Image') </script>";	
	
     }
                                              }
}

?>


<!--IMAGE SCRIPT -->
<?php
/*$sel_box="select * from box ";
$query= $this->connectF()->query($sel_box);*/
@$counter2=$_POST['counter'];
 
for ($i = 0; $i<=$counter2 ; $i++)                  {
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['boxshow']['tmp_name'][$i]);
@$Boxtitle=$_POST['boxtitle'][$i];
#$slider=implode(",",$slidetitle);
@$Box_id=$_POST['MainM_ID'];
#@$Image_path2=addslashes(file_get_contents($_FILES['boxshow']['tmp_name'][$i]));
@$Image_name2=($_FILES['boxshow']['name'][$i]);
@$Image_size=($_FILES['boxshow']['size'][$i]);  // bits size
@$Image_type=($_FILES['boxshow']['type'][$i]);
#$Path_pic=addslashes (file_get_contents($_FILES['boxshow']['tmp_name']));
#$profpic=$_FILES['boxshow']['name'];
#$col_id=implode(",",$Image_name);
@$cat=$_POST['cat'];
$clear='<div class="clear">';
$cl_close='</div>';
$full_cat=$clear.$cl_close.$cat;

$boxes="insert into box(title,ImageName,Box_id,cat_type,Time) VALUES ('$Boxtitle','$Image_name2','$Box_id','$cat',NOW())";



#$upbox="update box Set cat_Name='$cat_type'  where ID=(select Min(id)  FROM  box  Where cat_type='$cat' And  Box_id='$Box_id' ) ";



$selMIN="select *  from  box  where ID=(SELECT MIN(id) FROM `box` where cat_type='$cat'  And  Box_id='$Box_id')";


#$querys =  $this->connectF()->query($selMIN);

$querys =$this->connectF()->query($selMIN);


while($column= mysqli_fetch_object($querys))          {
 
 $min_id=$column->ID;
   
 $upbox="update box SET cat_Name='$cat'  where  ID='$min_id' ";
  
                                                      }

if(@$_POST['Adder'])                                                 {
if($Image_type=='image/jpeg' or  $Image_type=='image/png' or  $Image_type=='image/gif'  )

                                                       {
move_uploaded_file ($path,$dir.$Image_name2);                                                      
# $this->connectF()->query($upbox);
$this->connectF()->query($upbox);

# $this->connectF()->query($boxes);
$this->connectF()->query($boxes);

#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";

                                                        }
                                      
else    {
	
echo"<script> alert ('This not Image') </script>";	
	
        }
                                                                     }
                                                                                    }
?>

<!--static_script -->
<?php
/*$sel_box="select * from box ";
$query= $this->connectF()->query($sel_box);*/
@$counter2=$_POST['counter'];
 for ($i = 0; $i<=$counter2 ; $i++)                                      {
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['staticshow']['tmp_name'][$i]);
@$statictitle=$_POST['statictitle'][$i];
@$staticNum=$_POST['staticNum'][$i];
#$slider=implode(",",$slidetitle);
@$static_id=$_POST['MainM_ID'];
#@$Image_path2=addslashes(file_get_contents($_FILES['boxshow']['tmp_name'][$i]));
@$Image_name2=($_FILES['staticshow']['name'][$i]);
@$Image_size=($_FILES['staticshow']['size'][$i]);  // bits size
@$Image_type=($_FILES['staticshow']['type'][$i]);
#$Path_pic=addslashes (file_get_contents($_FILES['boxshow']['tmp_name']));
#$profpic=$_FILES['boxshow']['name'];
#$col_id=implode(",",$Image_name);
@$cat=$_POST['staticcat'];
$clear='<div class="clear">';
$cl_close='</div>';
$full_cat=$clear.$cl_close.$cat;

$static="insert into static(title,ImageName,static_id,static_type,static_Num,Time) 
VALUES ('$statictitle','$Image_name2','$static_id','$cat','$staticNum',NOW())";

#$upbox="update box Set cat_Name='$cat'  where ID=(select Min(id)  FROM  box  Where cat_type='$cat' And  Box_id='$Box_id' ) ";

$selMIN="select *  from  static  where ID=(SELECT MIN(id) FROM `static` where static_type='$cat'  And  static_id='$Box_id')";


#$querys =  $this->connectF()->query($selMIN);
$querys = $this->connectF()->query($selMIN);


while($column= mysqli_fetch_object($querys))          {
 
 $min_id=$column->ID;
   
 $upstatic="update static SET  static_Name='$cat'  where  ID='$min_id' ";
  
                                                      }

if(@$_POST['Addstatic'])                                                 {
if($Image_type=='image/jpeg' or  $Image_type=='image/png' or  $Image_type=='image/gif'  )

                                                       {
move_uploaded_file ($path,$dir.$Image_name2);                                                      
# $this->connectF()->query($upstatic);
$this->connectF()->query(@$upstatic);

# $this->connectF()->query($static);
$this->connectF()->query(@$static);


#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";

                                                        }
                                      
else    {
	
echo"<script> alert ('This not Image') </script>";	
	
        }
                                                                     }
                                                                                    }
?>

<!--VIDO script -->

<?php
@$counter3=$_POST['counters'];
 for ($i = 0; $i<=$counter3 ; $i++)                          { 
@$VIDO_title=$_POST['vidotitle'][$i];
#$slider=implode(",",$slidetitle);
@$VIDO_ID=$_POST['MainM_ID'];
@$dir=dirname(__FILES__)."/VIDEO/";
@$path=($_FILES['vidoshow']['tmp_name'][$i]);
@$VIDO_Name=($_FILES['vidoshow']['name'][$i]);
@$VIDO_size=($_FILES['vidoshow']['size'][$i]);  // bits size
@$VIDO_type=($_FILES['vidoshow']['type'][$i]);
#$Path_pic=addslashes (file_get_contents($_FILES['VIDOshow']['tmp_name']));
#$profpic=$_FILES['vidoshow']['name'];
#$col_id=implode(",",$Image_name);
@$cat_type=$_POST['category'];
$clear='<div class="clear">';
$cl_close='</div>';
$full_VIDO=$clear.$cl_close.$cat_type;

$VIDO="insert into video (title,VIDOName,VIDO_ID,cat_type,Time) VALUES ('$VIDO_title','$VIDO_Name','$VIDO_ID','$cat_type',NOW())";


#$upVIDO="update VIDEO SET cat_Name='$full_VIDO'  where  ID=(SELECT MIN(id) FROM `VIDEO` where cat_type='$cat_type'  And  VIDO_ID='$VIDO_ID')";


$selMIN="select *  from  video  where ID=(SELECT MIN(id) FROM `video` where cat_type='$cat_type'  And  VIDO_ID='$VIDO_ID')";


#$querys =  $this->connectF()->query($selMIN);
$querys =$this->connectF()->query($selMIN);

while($column= mysqli_fetch_object($querys))          {
 
 $min_id=$column->ID;
   
 $upVIDO="update video SET cat_Name='$full_VIDO'  where  ID='$min_id' ";
 
 
 
                                                     }
  
if(@$_POST['AddVIDO'])                           {



if($VIDO_type=='video/mp4' )
                               {

move_uploaded_file ($path,$dir.$VIDO_Name);
# $this->connectF()->query($VIDO);
$this->connectF()->query($VIDO);
# $this->connectF()->query($upVIDO);
$this->connectF()->query($upVIDO);

echo"<script> alert('video inserted ok')</script>";
#echo $min_id ;

                                }
                                 
else{
	
echo"<script> alert ('This not video ') </script>";	
	
    }
                                                 }
                                                             }
                                                                          
?>


<?php
@$Paragraph=$_POST['Paragraph'];
@$Para_id=$_POST['MainM_ID'];
$text="insert into paragraph(Paragraph,Paragraph_id) VALUES ('$Paragraph','$Para_id')";
if(@$_POST['send']){
# $this->connectF()->query($text);
$this->connectF()->query($text);

echo"ADD DONE";
}
?>

<?php
#@$cover_path=addslashes(file_get_contents($_FILES['coverimage']['tmp_name']));
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['coverimage']['tmp_name']);
@$cover_name=($_FILES['coverimage']['name']);
@$Image_size=$_FILES['coverimage']['size'];  // bits size
@$Image_type=$_FILES['coverimage']['type'];
@$cover_id=$_POST['MainM_ID'];
$coverimg="insert into cover(Cover_Name,cover_id) VALUES ('$cover_name','$cover_id')";
if(@$_POST['cover']){
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  or  $Image_type=='image/gif' )
                                                                          {
move_uploaded_file ($path,$dir.$cover_name);
 $this->connectF()->query($coverimg);
$this->connectF()->query($coverimg);

#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";

                                                                              }
else{
	
echo"<script> alert ('This not Image') </script>";	
	
}
}
?>
<?php
@$social_path=($_FILES['socialicon']['tmp_name']);
@$dir=dirname(__FILES__)."/IMG/";
@$social_name=($_FILES['socialicon']['name']);
@$Image_type=$_FILES['socialicon']['type'];
@$url=$_POST['url'];
@$social_id=$_POST['MainM_ID'];
$social="insert into social(social_icon,links) VALUES ('$social_name','$url')";
if(@$_POST['socail']){
if($Image_type=='image/jpeg' or  $Image_type=='image/png' )
{
	
move_uploaded_file ($social_path,$dir.$social_name);

# $this->connectF()->query($social);
$this->connectF()->query($social);

}

else{
	
echo"<script> alert ('This not Image') </script>";	
	
}
}
?>

<?php
@$marq_nu=$_POST['NewsMarque'];
@$marq_id=$_POST['MainM_ID'];
$marqu="insert into marque(News,News_id) VALUES ('$marq_nu','$marq_id')";
if(@$_POST['Marque']){
# $this->connectF()->query($marqu);
$this->connectF()->query($marqu);

echo"ADD DONE";
}
?>

<?php
@$Page_ID=$_POST['MainM_ID'];
@$Keyword=$_POST['KEYWORD'];
@$description=$_POST['description'];
@$title=$_POST['title'];
@$author=$_POST['author'];
$keywords="INSERT INTO `keywords` (`Keyword`, `description`, `author`, `title`, `Page_ID`) VALUES ( '$Keyword','$description','$author','$title','$Page_ID')";
if(@$_POST['SEO']){
# $this->connectF()->query($marqu);
$this->connectF()->query($keywords);

echo"ADD DONE";
}
?>














<?php
}
}
$use= new topic();
$use->connectF();
$use->sql();
?>




<script>
$(document).ready(function(){
    $("#loader").delay(6000).fadeOut("fast");   
    });
</script>


</body>
</html>
