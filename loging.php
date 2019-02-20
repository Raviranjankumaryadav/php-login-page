<?php
session_start();

include("newc.php");
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body{
	background:#333;
}
</style>
</head>
<body>
<div class="container">
<div class="row>

<div class="col-lg-8 col-md-8 col-xs-7 pink">
<form action="" method="POST">
<label>Login</label>
<input type="text" name="id" value=""><br><br>
<input type="password" name="password" value=""><br><br>
<input type="submit" name="submit" value="login" class="btn btn-success">
</form></div>

<div class="col-lg-4 col-md-4 col-xs-5">

<h1> hey this one is the login page</h1>

</div>

</div>
</div>
</body>
<?php

if(isset($_POST['submit'])){

$id=$_POST['id'];
$pass=$_POST['password'];
$query="SELECT * FROM junk WHERE id='$id' && password='$pass'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total==1){ 

$_SESSION['user_name']=$name;
header('location:Home.php');
}
else{
	echo"something wrong";
}}



?>
</html>