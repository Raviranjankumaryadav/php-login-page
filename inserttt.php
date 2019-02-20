<?php
error_reporting(0);
include("newc.php");
?>

<html>
<title>
insertinfo

</title>
<head>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
lable{
	color:gold;
font-family:senserif;}
body{
	  background:;
	  width:100%;
	  height:400px;
}
input[type=text]{
            
            width:100%;

  padding: 10px 17px;
  margin: 6px 0;
box-sizing: border-box;}
input[type=password]{
            
            width:100%;

  padding: 10px 17px;
  margin:6px 0;
box-sizing: border-box;}
b{
color:red;}
form{
margin-top:5%;}
h1{
	color:white;
	font-size:16px;
}
span{
	color:#FF5E35;
}
  
</style>
</head>
<body>
<div class="container">
<h1><strong>INSTRUCTION:</strong>
<p>Fill id in integer like(numeric value only(1-100..)) and password also in numberic and Name shoud be in a form of varchar</p></h1>
<span>this page only for admin of this site</span>
<form action="" method="POST" enctype="multipart/form-data">
<lable>ID:</lable>
<input type="text" name="id" value="" placeholder="Enter Student id*"><br><br>
<lable>Name:<lable>
<input type="text" name="name" value=""placeholder="Enter Student Name*"><br><br>
<lable>Password:<lable>
<input type="password" name="password" value=""placeholder="Enter Student password*"><br><br>
<lable>Class:<lable>
<input type="text" name="class" value=""placeholder="Enter Student Name*"><br>
<lable>Address:<lable>
<input type="text" name="Address" value=""placeholder="Enter Student Name*"><br>
<lable>Contact:<lable>
<input type="text" name="contact" value=""placeholder="Enter Student Name*"><br>
<lable>Fee:<lable>
<input type="text" name="fee" value=""placeholder="Enter Student Name*">
<lable>Uplod_img:<lable>
<input type="file" name="uploadfile" value=""><br><br>

<input type="submit" name="submit" value="submit"  class="btn btn-danger">
</form>

</div>
</body>

</html>
<?php
if($_POST['submit'])
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$cl=$_POST['class'];
	$ad=$_POST['Address'];
	$co=$_POST['contact'];
	$fe=$_POST['fee'];
	$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="student/".$filename;
move_uploaded_file($tempname,$folder);
	if($id!="" && $name!="" && $pass!="" && $cl!="" && $ad!="" && $co!="" && $fe!="" && $filename!="")
	{
		
	$query="INSERT INTO junk VALUES('$id','$name','$pass','$cl','$ad','$co','$fe','$folder')";
	$data=mysqli_query($conn,$query);
	if($data){
		echo"<b>data base is inserted into database<b>";
	}
	}
	else
	{
		echo"something probleam ravi";
}

}

?>








