							
		<div class="controlpanel">  
        <img src="ICON/kisspng-computer-icons-control-panel-clip-art-icon-design-управления-панели-значок-б-5b666d2e6a5800.1283606515334392784356.jpg" class="Paragraph-img"/> 
        welcom to control panel        </div>
        <div class="profilepic">
        <?php
		$photo=$column->profilename;
		
		if(!empty($photo)){
			?>
<img src="IMG/<?php echo $column->profilename;?>" style="width="150px" height="150px"/>
<?php
		}
?>
</div>
<br>
<div class="upload">
<form action="<?php echo $Php_self ?>"  method="post"  enctype="multipart/form-data">
<Input type="hidden"   name="Email"   value="<?php echo   $column->email;?>">
<input type="hidden"   name="password" value="<?php echo  $column->password;?>" />
<input type="file"     name="upload"    value="upload"  style="width:120px;">
<input type="submit"   name="load"    value="load">
</form>
<br>
<br>
<br>
<br>
</div>
<div class="username">   username:<?php echo   $column->username;    echo   $column->lastname;   ?> </div>
<div class="email">   Email:<?php echo   $column->email;?> </div>
<ul id="nav">
   <Li ><img src="ICON/document.png" class="Paragraph-img"/><a href="#newtopic" > اضافة الصفحات والبوستات </a>  </Li>
   <Li><img src="ICON/reg.png" class="Paragraph-img"/><a href="#subscrib">      تسجيل عضو  </a></Li>
   <Li><img src="ICON/USERS.png" class="Paragraph-img"/><a href="#unsubscrib" >     حذف عضو </a> </Li>
   <Li><img src="ICON/  " class="Paragraph-img"/> <a href="#comp" >    معلومات تجارية</a> </Li>
   <Li><img src="ICON/video-file-512.png" class="Paragraph-img"/> <a href="#HOW" >   How to use  </a> </Li>
   <Li> <img src="ICON/butor (30).png" class="buttor"><form action="logout.php"    method="post"   >
<input type="submit" value="Logout"  name="submit"  style="background-color:unset; color:black; border:unset;"/>
     </form>
      </Li>
   </ul>
     