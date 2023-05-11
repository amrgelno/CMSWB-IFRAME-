
<!--- routes script    Data sent feom   view -->

<?php

if(empty($_GET)){
	
@$pg_id=1;                           #Model(Tabel) fk

@$BoxModel=[Box_id,related_id,relatedtopic_id];
@$cardslider=[Box_id,related_id,relatedtopic_id];
@$coverModel=[cover_id,box_ID,relatedtopic_id];
@$formModel=[related_id,Box_id,relatedtopic_id];
@$ParagraphModel=[Paragraph_id,box_ID,relatedtopic_id];
@$sliderModel=[slide_id,box_ID,relatedtopic_id];
@$staticModel=[static_id,related_id,relatedtopic_id];
@$topicModel=[content_id,box_ID,relatedtopic_id];
@$VIDOModel=[VIDO_ID,related_id,relatedtopic_id];
@$coverModel=[cover_id,box_ID,relatedtopic_id];
@$marqueModel=[News_id,News];
@$keywordsModel=[Page_ID,Box_ID,TOPIC_ID];
@$footerModel=[parent_id,footer];
@$BrandModel=[Brand_id,Box_ID,TOPIC_ID];

#include("front/homepage.php");    # purephp

}

elseif(@$_GET['MainM_ID'] )  {   #MAIN_MENU ID	

@$pg_id=$_GET['MainM_ID'];

@$BoxModel=[Box_id,related_id,relatedtopic_id];
@$cardslider=[Box_id,related_id,relatedtopic_id];
@$coverModel=[cover_id,box_ID,relatedtopic_id];
@$formModel=[related_id,Box_id,relatedtopic_id];
@$ParagraphModel=[Paragraph_id,box_ID,relatedtopic_id];
@$sliderModel=[slide_id,box_ID,relatedtopic_id];
@$staticModel=[static_id,related_id,relatedtopic_id];
@$topicModel=[content_id,box_ID,relatedtopic_id];
@$VIDOModel=[VIDO_ID,related_id,relatedtopic_id];
@$coverModel=[cover_id,box_ID,relatedtopic_id];
@$marqueModel=[News_id,News];
@$keywordsModel=[Page_ID,Box_ID,TOPIC_ID];
@$footerModel=[parent_id,footer];
@$BrandModel=[Brand_id,Box_ID,TOPIC_ID];

include('front/section.php');

#include("front/homedb2.php");      purephp


}

elseif(@$_GET['box_ID'] ){

$pg_id=$_GET['box_ID'];

@$BoxModel=[related_id,relatedtopic_id];
@$cardslider=[related_id,relatedtopic_id];
@$coverModel=[box_ID,relatedtopic_id];
@$formModel=[Box_id,relatedtopic_id];
@$ParagraphModel=[box_ID,relatedtopic_id];
@$sliderModel=[box_ID, relatedtopic_id];
@$staticModel=[related_id, relatedtopic_id];
@$topicModel=[box_ID, relatedtopic_id];
@$VIDOModel=[related_id,relatedtopic_id];
@$coverModel=[box_ID,relatedtopic_id];
@$marqueModel=[News_id,News];
@$keywordsModel=[Box_ID,Page_ID,TOPIC_ID];
@$footerModel=[parent_id,footer];
@$BrandModel=[Box_ID,Brand_id,TOPIC_ID];


include('front/section.php');

#include("front/fetchbox&topic.php");	   purephp

}
elseif(@$_GET['Topic_ID'] ){

  $pg_id=$_GET['Topic_ID'];


@$BoxModel=[relatedtopic_id,Box_id,related_id];
@$cardslider=[relatedtopic_id,Box_id,related_id];
@$coverModel=[relatedtopic_id,cover_id,box_ID];
@$formModel=[relatedtopic_id,related_id,Box_id];
@$ParagraphModel=[relatedtopic_id,Paragraph_id,box_ID];
@$sliderModel=[relatedtopic_id,slide_id,box_ID];
@$staticModel=[relatedtopic_id,static_id, related_id];
@$topicModel=[relatedtopic_id,content_id,box_ID];
@$VIDOModel=[relatedtopic_id,VIDO_ID,related_id];
@$coverModel=[relatedtopic_id,cover_id,box_ID];
@$keywordsModel=[TOPIC_ID,Page_ID,Box_ID];
@$marqueModel=[News_id,News];
@$BrandModel=[TOPIC_ID,Box_ID,Brand_id];


include('front/section.php');
#include("front/fetchbox&topic.php");      purephp

}

elseif(@$_GET['UI'] ){

  include('front/UI.html');     #section -> template 

}

else{

include("front/fetchtopic_scan.php");	

}
?>
<script id='script'></script>


<script>
  
function sendData(){

  //alert('اضغط على نافذة للظهور محتوى');

  $('#loadingsc').hover(function(){

var pgid ='<?php echo $pg_id ?>';  // PK ID

var slider ='<?php echo $sliderModel[0]  ?>';  // FK  COL

var cat ='<?php echo $BoxModel[0]  ?>';  // FK  COL

var cover='<?php echo $coverModel[0]  ?>';  // FK  COL

var topic='<?php echo $topicModel[0]  ?>';  // FK  COL

var paragraph='<?php echo $ParagraphModel[0]  ?>'; //FK  COL

var static='<?php echo $staticModel[0]  ?>'; //FK  COL

var Form='<?php echo $formModel[0]  ?>'; //FK  COL

var video='<?php echo $VIDOModel[0]  ?>'; //FK  COL

var marque='<?php echo  $marqueModel[0]  ?>'; //FK  COL

var keywords='<?php echo  $keywordsModel[0]  ?>'; //FK  

var cardslider='<?php echo  $cardslider[0]  ?>'; //FK  COL 

var Brand='<?php echo $BrandModel[0]  ?>'; //FK  COL 


$('#script').load('VUEModel/controllervuejs.php',
{pg_id:pgid,Brand:Brand,keywords:keywords,slider:slider,paragraph:paragraph,cardslider:cardslider,cat:cat,static:static,topic:topic,Form:Form,cover:cover,marque:marque,video:video}); 
});


}


if(sendData === "function" ){

  document.querySelectorALL('#loadingsc').style.display='none';

}


</script> 



<!--  Data Object Recieved From Modelview  by Ajax  To View -->


