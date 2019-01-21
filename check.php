<?php

include ("config.php");
include ("library.php");

$db=new db($host,$dbusername,$dbpassword,$dbname);
$link=$db->connect();
$sec=new security_system($seckey);

if(isset($_POST['submit']))
{
	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['message']))
	{
	$name=$sec->enc($_POST['name']);
	$email=$sec->enc($_POST['email']);
	$phone=$sec->enc($_POST['phone']);
	$message=$sec->enc($_POST['message']);
		$insert=$db->insert("messages","'', '$name', '$email', '$phone', '$message', '0', ''");
		if($insert)
		{
            header("location:index.php?m=1");
		}
		else
		{
            header("Location:index.php?m=2");
		}
	}
	else{
        header("Location:index.php?m=3");
	}
}
else
{
	header("location:index.php");
}

?>