<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>company info</title>
</head>
<body>
<br />
<br />
<br />
<form action="<?php echo $php_self ?>" method="post"  enctype="multipart/form-data">
<table >
<tr>
<td>
company_name:-
<input type="text"  name="comp_Na" placeholder="أسم الشركةاو المؤسسة"/>
</td>
</tr>
<tr>
<td>
Business Type:-
<input type="text"  name="Business_Type" placeholder="مجال العمل"/>
</td>
</tr>
<tr>
<td>
Tax register:-
<input type="text"  name="Tax_register" placeholder="السجل الضريبي"/>
</td>
</tr>
<tr>
<td>
Tele_Number:-
<input type="number"  name="Tele_Number" placeholder="رقم التليفون"/>
</td>
<td>
Email:-
<input type="Email"  name="email" placeholder="الايميل "/>
</td>
</tr>
<tr>
<td>
fax:-
<input type="text"  name="fax" placeholder="الفاكس" />
</td>
</tr>
<tr>
<td>
country:-

<input type="text"  name="country" placeholder="أسم الدولة"/>
</td>
</tr>
<tr>
<td>
city:-
<input type="text"  name="city" placeholder="المدينة"/>
</td>
</tr>
<tr>
<td>
street:-
<input type="text"  name="street" placeholder="المنطقة/الشارع"/>
</td>
</tr>
<tr>
<td>
company logo:-
<input type="file"  name="logo"  placeholder="uploadfile" required />
</td>
</tr>
<tr>
<td>
<input type="submit"      value="حفظ"       name="save" />
</form>
</tr>
</td>
</table>
<form action="about.php"  method="post">
<input type="submit"  name="submit"  value="استعرض بيانات الشركة" />
</form>
<?php
include("connect.php");


class COMPANY  extends  condb{        
  

public function sql(){
	

$comp_Na=$_POST['comp_Na'];

$Business=$_POST['Business_Type'];

$Tax_reg=$_POST['Tax_register'];

$Tele_Number=$_POST['Tele_Number'];

$email=$_POST['email'];

$fax=$_POST['fax'];

$country=$_POST['country'];

$City=$_POST['city'];

$street=$_POST['street'];

$first=$_POST['first'];

$last=$_POST['last'];

$Path_pic=($_FILES['logo']['tmp_name']);

@$dir=dirname(__FILES__)."/IMG/";

$profpic=($_FILES['logo']['name']);

$Path_type=$_FILES['logo']['type'];


$ins="insert into company (comp_Na,Business,Tax_register,Email,Tele_Number,fax,country,City,street,path_pic) Values ('$comp_Na','$Business','$Tax_reg','$email','$Tele_Number','$fax','$country','$City','$street','$profpic')";

if($_POST['save']){

if($Path_type=='image/jpeg' or  $Path_type=='image/png'  or  $Path_type=='image/gif' )
{
	
move_uploaded_file ($Path_pic,$dir.$profpic);

 $this->connectF()->query($ins);

echo"<script> alert ('image inserted ok') </script>";	


}

else{
	
echo"<script> alert ('This not Image') </script>";	
	
}
}
}
}
$use= new COMPANY();
$use->connectF();
$use->sql();
?>
</body>
</html>
