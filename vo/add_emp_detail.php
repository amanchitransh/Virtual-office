<?php
		//session_start();
		//$eml=$_SESSION['email'];
		include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$dob=$_POST['dob'];
	$post=$_POST['post'];
	$qly=$_POST['qly'];
	$doj=$_POST['doj'];
	$salin=$_POST['sal_in'];
	$salmode=$_POST['sal_mode'];
	$sal=$_POST['sal'];
	$addr=$_POST['addr'];
	$em=$_POST['eml'];

	$sql="update employee set dob='$dob',post='$post',qualification='$qly',doj='$doj',salary_in='$salin',sal_mode='$salmode',salary='$sal',address='$addr' where email='$em'";
if(mysqli_query($con,$sql))
{
	header("location:manager.php?umsg=Employee Data Added Successfully");
}
else {
	header("location:manager.php?umsg=Error  !!!");
}
	}


		
		
		?>
		