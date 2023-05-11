<!DOCTYPE html>

<!--  webpreview Backend -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<title>CMS_WEB</title>
</head>
<style>

#nav-tool>*{

text-align: center;


}


#tablet{

display: none;


}


#mobile{

display: none;


}

#laptop{

display: none;


}



#tablet:target{

display: block;


}


#mobile:target{

    display: block;


}

#laptop:target{

    display: block;


}




</style>
<body>
<div id="nav-tool" align="center" style="background-color:#999;" >  
    <span class="material-icons-outlined">
       <img src="Icon/mobile.jpg" width="25px" height="25px"> <a href='#tablet'> tablet </a>
        </span>
        <span class="material-icons-outlined" >
            <img src="Icon/OIP (2).jpg" width="25px" height="25px"><a href='#mobile'> mobile  </a>
            </span>
            <span class="material-icons-outlined">
                <img src="Icon/Laptop-icon-vector-Graphics-1.png "  width="25px" height="25px"><a href='#laptop'>  laptop </a>
                </span>
</div>

<div align="center"> <!--mobile view -->

    <iframe  src="index.php"  id="mobile" width="260px"  height="600px" > 
   

	  </iframe>
    
    <!--ipad view -->
    <iframe src="index.php" id="laptop" width="1200px"  height="768px"> </iframe>

    
    <!--laptop view-->
    <iframe src="index.php"  id="tablet" width="1024px"  height="600px"> 
</iframe>

</div>




</body>
</html>
