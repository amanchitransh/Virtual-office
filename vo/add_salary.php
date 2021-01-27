<?php
		include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{

	$n=$_POST['n'];
	$ad=$_POST['ad'];
	$em=$_POST['em'];
	$mo=$_POST['mo'];
	$po=$_POST['po'];
	$sn=$_POST['salin'];
	$sm=$_POST['salmode'];
	$s=$_POST['sal'];
		$da=$_POST['da'];
	$oa=$_POST['oa'];		$ca=$_POST['ca'];
	$coa=$_POST['coa'];
			$ra=$_POST['ra'];
	$ma=$_POST['ma'];		$ba=$_POST['ba'];
	$gst=$_POST['gst'];		$date=$_POST['date'];
	$month=$_POST['month'];		$ss=$_POST['sal_status'];

	$sql="insert into salary values('$n','$ad','$em','$mo','$po','$sn','$sm','$s','$da','$oa','$ca','$coa','$ra','$ma','$ba','$gst','$date','$month','$ss')";
if(mysqli_query($con,$sql))
{
	header("location:man_salary.php?umsg=Employee Data Updated Successfully");
}
else {
	header("location:man_salary.php?umsg=Error  !!!");
}
	}


		
		
		?>
