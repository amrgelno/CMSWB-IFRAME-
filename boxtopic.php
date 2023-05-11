<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<title>box_topic</title>
</head>
<style type="text/css">
.job{
width:500px;
height:50px;
background:#0FF;
}
</style>
<body bgcolor="darkkhaki">

<?php
include("connect.php");

class boxtopic extends  condb{

public function sql(){

@$box_ID=$_POST['box_ID'];
$selectbox= "SELECT * from  box  where  ID = $box_ID";
#$query = mysqli_query($connect,$select);
$query=$this->connectF()->query($selectbox);

while($column= mysqli_fetch_object($query)){
?>
<img src="ICON/Paragraph.png" class="Paragraph-img"/> 
<h1 class="Paragraph-button"> Paragraph&title  </h1> 
<div class="Paragraph-title">
<form action="boxtopic.php" method="post">
<input type="hidden"  name="box_ID"   value="<?PHP echo $column->ID?>"/>
<textarea name="Paragraph" cols="1" rows="1"></textarea>
<input type="submit"  name="send"  value="send" class="send"  />
</form>
<form action="Editboxpragraph.php"  method="post">
<input type="hidden"  name="box_ID"   value="<?PHP echo $column->ID?>"/>
<input type="submit"   name="send"   value="Edit" class="edit"/>
</form>
</div>
<hr />
<script>
$(document).ready(function(){
$(".Paragraph-button").click(function(){
$(".Paragraph-title").slideToggle(2000); 
/*$("#MENUAFTER").css({display:"none"});*/   
});     
});
</script>
<img src="ICON/ArticleES.png" class="Article-img"/> 
<h1 class="Article-bt"> Article&topic </h1><!--<div class="topicopen-buttor"> >> </div> <div class="topicClose-buttor"> << </div>-->
<div class="Article">
<form action="boxtopic.php" method="post" enctype="multipart/form-data">
<input type="hidden"  name="box_ID"   value="<?PHP echo $column->ID?>"/>
<input type="text" name="subject" placeholder="newsubject" />
<br /><br />
<br />
<textarea type="text"   name="textarea"  placeholder="insert new topic here" cols="40" rows="10"></textarea>
<input type="file"  name='upload'  value="search for a file" />
<br /><br />
<br />
<input type="submit"  name="submit" value="send"  class="send2"  />
</form>
<form action="editboxtopic.php" method="post">
<input type="hidden" name="box_ID" VALUE="<?PHP echo $column->ID?>">
<input type="SUBMIT" name="INSERT" VALUE="EDIT_TOPIC" class="EDIT_TOPIC">
</form>
</div>
<hr />   
<script>
$(document).ready(function(){
$(".Article-bt").click(function(){
$(".Article").slideToggle(2000); 
/*$("#MENUAFTER").css({display:"none"});*/   
});     
});
</script>

<img src="ICON/dribbble-categories.png" class="Boxes-img"/>    
<h1 class="Box-bt"> Boxes&categeory </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
<div class="Boxes">
<form name="BOXScript">
<input type="text"     name="cat_Name"  placeholder="cat_Name" id="cat"  />     
<input type="number"   name="count"    id="count"   placehoder="insert number image"/>
<input type="submit"  name="addMORE"  value="+"  onclick="addval();" />
</form>
<form name="updatebox"  action="Editboxboxes.php"  method="post">
<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>
<input type="submit"  name="submit"  value="updateBox" class="EDIT_TOPIC" />
</form>
</div>
<hr />
<script>
$(document).ready(function(){
$(".Box-bt").click(function(){
$(".Boxes").slideToggle(2000); 
/*$("#MENUAFTER").css({display:"none"});*/   
});     
});
</script>

<script>
function addval(){
var x=document.getElementById('count').value;
var s=document.getElementById('cat').value;
var  F="<form action='<?php echo $php_self;?>' name='form' method='post' enctype='multipart/form-data'>";
var  m="<input type='text' name='boxtitle[]' placeholder='boxshow caption'/>";
var y="<input type='file'  name='boxshow[]'  value='search for a file' />";
for(i=1;i<=x;i++){
document.write(' '+F+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
document.write("<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>");
document.write("<input type='hidden'  name='counter'>");
document.form.counter.value=x;
document.write("<input type='submit'  name='Adder'  value='addimage'/>");
document.write("<input type='text'  name='cat'>");
document.form.cat.value=s;
document.write('<form/>');
}
</script>
<img src="ICON/Image_playback-512.png" class="videocat-img"/> 
<h1 class="vido-bt"> video  categeory </h1>
<!--<div class="videocatOpen-buttor"> >> </div>  <div class="videocatClose-buttor"> << </div>--> 
<div class="video-cat">
<form name="vidoScript">
<input type="text"     name="cat_VIDO"  placeholder="cat_Name" id="catvido"  />  
<input type="number"   name="countnum"    id="countnum"   placehoder="insert number image"/>
<input type="submit"  name="addMORE"  value="+"  onclick="addvido();"/>
</form>
<form name="EditVideo"  action="EditVideobox.php"  method="post">
<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>
<input type="submit"  name="submit"  value="updateVIDEO" class="EDIT_TOPIC" />
</form>
</div>
<hr />
<script>
$(document).ready(function(){
$(".vido-bt").click(function(){
$(".video-cat").slideToggle(2000); 
/*$("#MENUAFTER").css({display:"none"});*/   
});     
});
</script>
<script>
function addvido(){
var x=document.getElementById('countnum').value;
var s=document.getElementById('catvido').value;
var  F="<form action='boxtopic.php' name='form' method='post' enctype='multipart/form-data'>";
var  m="<input type='text' name='vidotitle[]' placeholder='boxshow caption'/>";
var y="<input type='file'  name='vidoshow[]'  value='search for a file' />";
for(i=1;i<=x;i++){
document.write(' '+F+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
document.write("<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>");
document.write("<input type='hidden'  name='counters'>");
document.form.counters.value=x;
document.write("<input type='text'  name='category'>");
document.form.category.value=s;
document.write("<input type='submit'  name='AddVIDO'  value='Addvideo'/>");
document.write('<form/>');
}
</script>
<img src="ICON/slideshow.png" class="slideshow-img"/>    
<h1 class="slideshow-bt"> slideshow </h1><!--<div class="slideshowOpen-buttor"> >> </div> <div class="slideshowclose-buttor"> << </div>-->
<div class="slideshow">
<form name="slideshowscript">
<input type="number"   name="counter"    id="counter"   placehoder="insert number image"/>
<input type="submit"  name="submit"  value="+Addmore" onclick="addmore();"/>
</form>
<form name="updateslide"  action="editboxslide.php"  method="post">
<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>
<input type="submit"  name="submit"  value="updateslider" class="EDIT_TOPIC" />
</form>
</div>
<hr />
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
var x=document.getElementById('counter').value;

var  F="<form action='boxtopic.php' name='form' method='post' enctype='multipart/form-data'>";
var  m="<input type='text' name='slidetitle[]' placeholder='slideshow caption'/>";
var y="<input type='file'  name='uploadslide[]'  value='search for a file' />";

for(i=1;i<=x;i++){
document.write(' '+F+y+m);
document.write('<br />');
document.write('<br />');
document.write('<br />');
}
document.write("<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>");

document.write("<input type='text'  name='countnum'>");
document.form.countnum.value=x;
document.write("<input type='submit'  name='Add'  value='addimage'/>");
document.write('<form/>');

}
</script>
<img src="ICON/banner_carrousel_slider_images_ad_promotion-512.png" class="cover-img"/> 
<h1 class='cover-bt'>coverimage </h1>
<!--<div class="coverOpen-buttor"> >> </div>  <div class="coverClose-buttor"> << </div>-->
<div class="cover">
<form action="boxtopic.php" method="post" enctype="multipart/form-data">
<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>
<input name="coverimage" type="file"  value="uploadfile" />
<input name="cover" type="submit" value="insert" class="EDIT_TOPIC"/>
</form>
<form action="Editboxcover.php" method="post">
<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>
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

<img src="ICON/seo2-91-128.png" class="Marque"/> 
<h1 class="KEYWORDS-bt"> Meta Generator(SEO TOOLS)  </h1>
<div class="KEYWORDS">
<form action="boxtopic.php" method="post">
<input type="hidden"  name="box_ID"   value="<?PHP echo $column->ID?>"/>
<input type="text"    name="KEYWORD"  size="50px"  placeholder="KEYWORD  كلمات المفتاحية" /><br/> <br/>
<input type="text"    name="description"  size="80px"  placeholder="descriptionوصف الصفحة " />
<input type="text"    name="title"  size="50px"  placeholder="titleعنوان الصفحة " /> 
<input type="text"    name="author"  size="50px"  placeholder="authorأسم مؤلف" /> 
<input type="submit"  name="SEO"  value="send"  class="send"/>
</form>
<form action="Editboxkeywords.php"  method="post" >
<input type='hidden'  name='box_ID'   value='<?PHP echo $column->ID?>'/>
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
@$box_ID=$_POST['box_ID'];
#@$Image_path=addslashes (file_get_contents($_FILES['upload']['tmp_name']));
@$Image_name=$_FILES['upload']['name'];
@$Image_size=$_FILES['upload']['size'];  // bits size
@$Image_type=$_FILES['upload']['type'];

$topic="insert into topic (subject,content,ImageName,box_ID) VALUES ('$subject','$textarea','$Image_name','$box_ID')";

if(@$_POST['submit'])                                                      {
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )
                                                            {

#mysqli_query($connect,$topic);
$this->connectF()->query($topic);


move_uploaded_file ($path,$dir.$Image_name);
#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";
                                                             }
else{

echo"<script> alert ('This not Image') </script>";	
    
}
                                                                       }

?>

<?php
#$select="select * from slider ";
#$query=mysqli_query($connect,$select);
#$query=$this->connectF()->query($select);
@$counter=$_POST['countnum'];
for ($i=0; $i<=$counter ; $i++)                                                                  {
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['uploadslide']['tmp_name'][$i]);
@$slidetitle=$_POST['slidetitle'][$i];
#$slider=implode(",",$slidetitle);
@$box_slide=$_POST['box_ID'];
@$Image_path=addslashes (file_get_contents($_FILES['uploadslide']['tmp_name'][$i]));
@$Image_name=($_FILES['uploadslide']['name'][$i]);
#$col_id=implode(",",$Image_name);
@$Image_size=($_FILES['uploadslide']['size'][$i]);  // bits size
@$Image_type=($_FILES['uploadslide']['type'][$i]);


$slider="insert into slider(title,ImageName,box_ID) VALUES ('$slidetitle','$Image_name','$box_slide')"; 

if(@$_POST['Add'])                                                                       {
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )                   {

move_uploaded_file ($path,$dir.$Image_name);
#mysqli_query($connect,$slider);
$this->connectF()->query($slider);

#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";

                                                                            }
else    {

echo"<script> alert ('This not Image') </script>";	

     }                                                                                          
                                                                                                     }
                                                                                                           }
?>

<!--IMAGE SCRIPT -->
<?php

/*$sel_box="select * from box ";
$query=mysqli_query($connect,$sel_box);*/
@$counter2=$_POST['counter'];
for ($i = 0; $i<=$counter2 ; $i++)                                      {
@$dir=dirname(__FILES__)."/IMG/";
@$path=($_FILES['boxshow']['tmp_name'][$i]);
@$Boxtitle=$_POST['boxtitle'][$i];
#$slider=implode(",",$slidetitle);
@$Box_id=$_POST['box_ID'];
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


$boxes="insert into box(title,ImageName,related_id,cat_type,Time) VALUES ('$Boxtitle','$Image_name2','$Box_id','$cat',NOW())";



#$upbox="update box Set cat_Name='$cat'  where ID=(select Min(id)  FROM  box  Where cat_type='$cat' And  related_id='$Box_id' ) ";



$selMIN="select *  from  box  where ID=(SELECT MIN(id) FROM `box` where  cat_type='$cat'  And  related_id='$Box_id')";


#$querys = mysqli_query($connect,$selMIN);
$querys=$this->connectF()->query($selMIN);


while($column= mysqli_fetch_object($querys))          {

$min_id=$column->ID;

$upbox="update box SET cat_Name='$cat'  where  ID='$min_id' ";

                                                  }

if(@$_POST['Adder'])                                                 {
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )

                                                   {
move_uploaded_file ($path,$dir.$Image_name2);                                                      
#mysqli_query($connect,$upbox);
$this->connectF()->query($upbox);

#mysqli_query($connect,$boxes);
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


<!--VIDO script -->

<?php

@$counter3=$_POST['counters'];
for ($i = 0; $i<=$counter3 ; $i++)                          { 
@$VIDO_title=$_POST['vidotitle'][$i];
#$slider=implode(",",$slidetitle);
@$VIDO_ID=$_POST['box_ID'];
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

$VIDO="insert into video(title,VIDOName,related_id,cat_type,Time) VALUES ('$VIDO_title','$VIDO_Name','$VIDO_ID','$cat_type',NOW())";


#$upVIDO="update VIDEO SET cat_Name='$full_VIDO'  where  ID=(SELECT MIN(id) FROM `VIDEO` where cat_type='$cat_type'  And  related_id='$VIDO_ID')";


$selMIN="select *  from  video  where ID=(SELECT MIN(id) FROM `video` where cat_type='$cat_type'  And  related_id='$VIDO_ID')";


#$querys = mysqli_query($connect,$selMIN);
$querys = $this->connectF()->query($selMIN);

while($column= mysqli_fetch_object($querys))          {

$min_id=$column->ID ;

$upVIDO="update video SET cat_Name='$full_VIDO'  where  ID='$min_id' ";



                                                 }

if(@$_POST['AddVIDO'])                           {



if($VIDO_type=='video/mp4' )
                           {

move_uploaded_file ($path,$dir.$VIDO_Name);
#mysqli_query($connect,$VIDO);
$this->connectF()->query($VIDO);
#mysqli_query($connect,$upVIDO);
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
@$box_ID=$_POST['box_ID'];
$text="insert into paragraph(Paragraph,box_ID) VALUES ('$Paragraph','$box_ID')";
if(@$_POST['send']){
#mysqli_query($connect,$text);
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
@$box_ID=$_POST['box_ID'];
$coverimg="insert into cover(Cover_Name,box_ID) VALUES ('$cover_name','$box_ID')";
if(@$_POST['cover'])                                                         {
if($Image_type=='image/jpeg' or  $Image_type=='image/png'  )
                                                                  {
move_uploaded_file ($path,$dir.$cover_name);
#mysqli_query($connect,$coverimg);
$this->connectF()->query($coverimg);

#echo'<meta http-equiv="refresh"  content="1;url=newtopic.php"/>';
echo"<script> alert('image inserted ok')</script>";

                                                                   }

else  
{

echo"<script> alert ('This not Image') </script>";	

                                                    }

                                                                                   }
                                                                                 
?>


<?php
@$box_ID=$_POST['box_ID'];
@$Keyword=$_POST['KEYWORD'];
@$description=$_POST['description'];
@$title=$_POST['title'];
@$author=$_POST['author'];
$keywords="INSERT INTO keywords (Keyword,description,author,title,Box_ID) VALUES ('$Keyword','$description','$author','$title','$box_ID')";
if(@$_POST['SEO']){

$this->connectF()->query($keywords);

echo"ADD DONE";
}
?>





<?php
}
}
$use= new boxtopic();
$use->connectF();
$use->sql();
?>



</body>
</html>
