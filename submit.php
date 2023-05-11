<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin control</title>
<meta name="viewport" content="width=device-width, ">
<link href="CMSCSS/CMSXS.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSSm.css" rel="stylesheet" type="text/css" />
<link href="CMSCSS/CMSLg.css" rel="stylesheet" type="text/css"/>
<link href="CMSCSS/CMSMD.css" rel="stylesheet" type="text/css"/>
</head>

<body   background="ICON/bootstrap-5.png">
<?PHP

include("connect.php");


class submit  extends  condb{        
  

public function sql(){
	
@$email=$_POST['Email'];
@$PASSWORD=$_POST['password'];

@session_start();
if($_SERVER["REQUEST_METHOD"] == "POST");


$sql="select * from users where email='$email' AND password='$PASSWORD' " ;


$query =$this->connectF()->query($sql);

	if(!$column= mysqli_fetch_object($query)){
		
		include("login.php");
        #echo'<meta http-equiv="refresh"  content="1;url=login.php">' ;
	echo"fault in user name or password";
		
	}
		else{
		$user_type=$column->user_TYPE;
		
		if($user_type=='Admin'){
		//open  Admin control		
		@$_SESSION['Email']=$email;
		@$_SESSION['password']=$PASSWORD;
        include("Admin.php");          		
	                        }
        elseif($user_type=='supervisor'){
		//open  users	 control	
		@$_SESSION['Email']=$email;
		@$_SESSION['password']=$PASSWORD;
        include("supervisor.php");          		
	                        }
							
          }
                                         
?>


<?php
@$dir=dirname(__FILES__)."/IMG/";
@$profpic=$_FILES['upload']['name'];
@$path=($_FILES['upload']['tmp_name']);
$mail=$_POST['Email'];
$update="update users SET  profilename='$profpic'  where  email ='$mail'  ";
if(@$_POST['load']){
	move_uploaded_file ($path,$dir.$profpic);
	$this->connectF()->query($update);
}

}
}
$use= new submit();
$use->connectF();
$use->sql();

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





