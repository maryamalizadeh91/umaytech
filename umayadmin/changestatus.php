<?php
session_start();
if(isset($_SESSION['admin']))
{
include ("../config.php");
include ("../library.php");
$adminid=$_SESSION['admin'];
$db=new db($host,$dbusername,$dbpassword,$dbname);
$link=$db->connect();
$sec=new security_system($seckey);

	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$status=$sec->enc($_POST['status']);
		$update=$db->update("messages","readbyadmin='$adminid', status='$status'","id='$id'");
		if($update)
		{
			header("location:panel.php?message=1");
		}
		else
		{
			header("location:panel.php?message=2");
		}
	}
	else
	{
		header("location:panel.php");
	}
	
}
else{
	header("location:logout.php");
}
?>