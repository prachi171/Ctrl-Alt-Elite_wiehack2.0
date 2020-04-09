<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');
$name=$POST['uname'];
$num=$POST['num'];
$gen=$POST['gen'];
$age=$POST['age'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$numb=mysqli_num_rows($result);

	header('location:wie.php');

	
