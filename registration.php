<?php
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');
$name=$POST['uname'];
$num=$POST['num'];
$gen=$POST['gen'];
$age=$POST['age'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$numb=mysqli_num_rows($result);


	$reg="insert into usertable(name,number,age,gender) values ('$name','$num','$gen','$age')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
