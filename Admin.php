							
		<div class="controlpanel">  
        
        <div class="CMS-dashboard">
       <img src="ICON/79.png" width="50px" height="65px"/> 
       CMS-dashboard      
     
        <div class='bts' style="float:right;">
 <button type="button" onclick="goback()" class="back"> < Back  </button>  
 <button type="button" onclick="gonext()" class="back"> Next > </button> 
 <button onClick="window.location.reload();">↻Refresh Page</button>
 </div>

</div>
<script>
    function goback(){
        window.history.go(-1);
    }

        
</script>

<script>
    function gonext(){
        window.history.go(+1);
    }

</script>    
           
            </div>
       
            
       <div id="Box-Anyltics">
       <div class="Box-Anyltics" style="background-color:#FF0;"> <img src="ICON/Add-Male-User.png" width="25px" height="20px" />USERS: <?php 	

$USERS=$this->connectF()->query("select  count(ID) as total  from  users ");


$count=mysqli_fetch_object($USERS);
?>
<span class="Number_static">
<?php echo $count->total; ?> </span>       

<?php
       
?>       
       </div>
<div class="Box-Anyltics" style="background-color:#99F;"> <img src="ICON/add_link-128.png" width="25px" height="20px" /> Indexed_Link:<?php
		

$submenu=$this->connectF()->query("select  count(ID) as total  from  submenu ");


$count=mysqli_fetch_object($submenu);


?>
<span class="Number_static">
<?php echo $count->total; ?> </span>       

<?php
       
?>         
     </div>
<div class="Box-Anyltics" style="background-color:#0FF;"> <img src="ICON/add_link-128.png" width="25px" height="20px" />External_Link:<?php
		

$social=$this->connectF()->query("select  count(ID) as total  from  social ");


$count=mysqli_fetch_object($social);


?>
<span class="Number_static">
<?php echo $count->total; ?> </span>       

<?php
       
?>         
  </div>
<div class="Box-Anyltics" style="background-color:#93C;"> <img src="ICON/kontact.png" width="25px" height="20px" />categories:<?php
		

$USERS=$this->connectF()->query("select  count(ID) as total  from  box where  cat_Name != ' ' ");


$count=mysqli_fetch_object($USERS);


?>
<span class="Number_static">
<?php echo $count->total; ?> </span>       

<?php
       
?>         
  </div>
<div class="Box-Anyltics" style="background-color:#06C;"> <img src="ICON/seo2-91-128.png" width="25px" height="20px" />Keywords:<?php
		

$social=$this->connectF()->query("select  count(ID) as total  from  keywords ");


$count=mysqli_fetch_object($social);


?>
<span class="Number_static">
<?php echo $count->total; ?> </span>       

<?php
       
?>         
 </div>
        </div>
        
        <div id="menu"> 
        
         <div class="profilepic">
        <?php
		$photo=$column->profilename;
		
		if(!empty($photo)){
			?>
<img src="IMG/<?php echo $column->profilename;?>" style="width:150px; height:150px; "/>
<?php
		}
?>

</div>



<div class="upload">
<form action="?page"  method="post"  enctype="multipart/form-data">
<Input type="hidden"   name="Email"   value="<?php echo   $column->email;?>"/>
<input type="hidden"   name="password" value="<?php echo  $column->password;?>" />
<label for="upload"><img src="ICON/camera.png" width="50px" height="50px" class="camera" /> </label>
<input type="file"   id="upload"  name="upload"    value="upload"  style="width:120px; display:none;"/>
<input type="submit"   name="load"    value="load">
</form>
</div>
<br/>
<br/>
<br/>
<div class="username" ><img src="ICON/Folder (25).png" width="40px"  height="23px"/> &nbsp <?php echo   $column->username;    echo   $column->lastname;   ?> </div>
<br/>
<div class="email">  <img src="ICON/Contacts(5).png" width="40px"  height="30px"/> &nbsp <?php echo   $column->email;?> </div>

<div class="menu" style="background:#0F0;"></div>



<ul id="nav">
   <Li ><a href="#newtopic" > <img src="ICON/document.png" class="Paragraph-img" title="أدوات تخصيص الصفحة"> </a>  </Li>
   <Li><a href="#subscrib"> <img src="ICON/reg.png" class="Paragraph-img"  title="تسجيل عضو"/>       </a></Li>
   <Li><a href="#unsubscrib" > <img src="ICON/USERS.png" class="Paragraph-img" title=" حذف عضو"/>  </a> </Li>
   <Li> <a href="#comp" >  <img src="ICON/butor (25).png" class="Paragraph-img" title="معلومات تجارية"/>  </a> </Li>
   <Li> <a href="#HOW" > <img src="ICON/video-file-512.png" class="Paragraph-img" title="How to use"/></a> </Li>
   <Li> <a href="WEBVIEW.PHP"  target="_blank"  rel="noopener norefferrer"> <img src="ICON/viewweb.png" class="Paragraph-img" title="viewweb"/> </a> </Li>
   <Li> <img src="ICON/butor (30).png" class="buttor"><form action="logout.php"    method="post"   >
<input type="submit" value="Logout"  name="submit"  style="background-color:unset; color:black; border:unset;"/>
     </form>
      </Li>
   </ul>
       </div>               
       
       <div id="comp_info" style="float:right;">
       <h1 align="center">  <img src="ICON/folder_home3(1).png" class="Paragraph-img" />   Company_Info  </h1>
       <hr/>
       <?php

$info=$this->connectF()->query("select * from company where ID=(select MAX(id) from company)");

while($row=mysqli_fetch_object($info)){
?>
        <ul id="nav-tb">
          <Li>  <img src="ICON/Buildings_building_house_city_office_home.png" class="Paragraph-img" /> <?php echo $row->comp_Na  ?>                </Li>
           <Li>  <img src="ICON/Paste.png" class="Paragraph-img" > Business_Type              </Li>
   <Li>  <img src="ICON/FILE9.png" class="Paragraph-img" > <?php echo $row->Email  ?>              </Li>
   <Li>  <img src="ICON/flat-color-location-icon-paper-map_52465-148.jpg" class="Paragraph-img"  /> 
    <?php echo $row->street  ?>,<?php echo $row->country ?>             </Li>
   <Li>  <img src="ICON/contact-128.png" class="Paragraph-img"/>  <?php echo $row->Tele_Number  ?>           </Li>
   <Li>  <img src="ICON/contact(1).png" class="Paragraph-img"/> &nbsp <?php echo $row->fax  ?>       </Li>
   <Li>  <img src="ICON/cash_register(1).png" class="Paragraph-img"> <?php echo $row->Tax_register  ?>  </Li>
   </ul> 
   
   <?php
}
?>
   
 <h1 style="padding-left:30px;">  <img src="ICON/003.jpg" class="Paragraph-img" /> website_Info  </h1>
       <hr/>   
       <?php

$info=$this->connectF()->query("select * from keywords where ID=(select MIN(id) from keywords)");

while($row=mysqli_fetch_object($info)){
?>
        <ul id="nav-tb">
          <Li>  <img src="ICON/seo2-91-128.png" class="Paragraph-img" title="Keyword" /> <?php echo $row->Keyword  ?>                </Li>
          <hr/>
           <Li>  <img src="ICON/Title.png" class="Paragraph-img" title='title' > <?php echo $row->title  ?>             </Li>
            <hr/>
   <Li>  <img src="ICON/description.png" class="Paragraph-img" title='description' > <?php echo $row->description  ?>              </Li>
    <hr/>
   <Li>  <img src="ICON/author.png" class="Paragraph-img" title='author'  /> 
    author:-<?php echo $row->author  ?>              </Li>
   </ul> 
   
   <?php
}
?>
   
    </div>
       
       <br/> <br/>
    
    
    
    