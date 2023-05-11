<html>

 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin control</title>
<meta name="viewport" content="width=device-width, ">
<link href="CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?PHP

include("con_db2.php");
@$email=$_POST['Email'];
@$PASSWORD=$_POST['password'];

@session_start();
if($_SERVER["REQUEST_METHOD"] == "POST");


$sql="select * from users where email='$email' AND password='$PASSWORD' " ;


$query = mysqli_query($connect,$sql);

	if(!$column= mysqli_fetch_array($query)){
		
		include("login.php");
        #echo'<meta http-equiv="refresh"  content="1;url=login.php">' ;
	echo"fault in user name or password";
		
	}
		else{
		$user_type=$column["user_TYPE"];
		
		if($user_type==Admin){
		//open  Admin control		
		@$_SESSION['Email']=$email;
		@$_SESSION['password']=$PASSWORD;
        include("Admin.php");          		
	                        }
        elseif($user_type==supervisor){
		//open  users	 control	
		@$_SESSION['Email']=$email;
		@$_SESSION['password']=$PASSWORD;
        include("supervisor.php");          		
	                        }
							
          }
                                         
?>
<?php
include("con_db2.php");
@$dir=dirname(__FILES__)."/IMG/";
@$profpic=$_FILES['upload']['name'];
@$path=($_FILES['upload']['tmp_name']);
$mail=$_POST['Email'];
$update="update users SET  profilename='$profpic'  where  email ='$mail'  ";
if(@$_POST['load']){
	move_uploaded_file ($path,$dir.$profpic);
	mysqli_query($connect,$update);
}



?>


<div id="newtopic">
<iframe  src="MaiinM.php" width="980px" height="650px">
</iframe>
</div>


<div id="subscrib">
<iframe  src="form.php" width="950px" height="650px">
</iframe>

</div>

<div id="unsubscrib">
<iframe  src="delete_reg.php" width="950px" height="650px">
</iframe>
</div>

<div id="comp">
<iframe  src="company.php" width="950px" height="650px">
</iframe>
</div>


<div id="HOW">
<iframe  src="Cms_Vido.html" width="950px" height="650px">
</iframe>
</div>


</body>
</html>


<!-----image upload---!>





