<?php
session_start();
include ("../config.php");
include ("../library.php");
//tnere is no captcha
$db=new db($host,$dbusername,$dbpassword,$dbname);
$link=$db->connect();
$sec=new security_system($seckey);

if(isset($_POST['submit']))
{
	if(isset($_POST['username'])&&isset($_POST['pass']))
	{
		$username=$sec->enc($_POST['username']);
		$pass=$sec->enc($_POST['pass']);
		//echo $pass;
		//echo "<br>";
		$select=$db->select("admins","username='$username'");
		$count=mysqli_num_rows($select);
		if($count==1)
		{
			$r=mysqli_fetch_array($select);
			$user=$r['username'];
			$password=$r['password'];
			//echo $password;
			$id=$r['id'];
			if($pass==$password)
			{
				$_SESSION['admin']=$id;
				header("location:panel.php");
			}
			else{
				//echo "Provided info is wrong!";
                header("Location:index.php?m=2");
			}
		}
		else
		{
			//echo "There is not a user with such information!";
            header("Location:index.php?m=3");
		}
	}
	else
	{
		header("location:index.php");
	}
}
else
{
	header("location:index.php");
}

?>