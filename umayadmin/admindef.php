<?php
session_start();
include ("../config.php");
include ("../library.php");
//tnere is no captcha
$db=new db($host,$dbusername,$dbpassword,$dbname);
$link=$db->connect();
$sec=new security_system($seckey);

echo $name=$sec->enc("name");
echo "<br/>";
echo $username=$sec->enc("username");
echo "<br/>";
echo $password=$sec->enc("pass");
echo "<br/>";
echo $phone=$sec->enc("Done");
echo "<br/>";
echo "<br/>";
echo $sec->dec($name);
echo "<br/>";
echo $sec->dec($username);
echo "<br/>";
echo $sec->dec($password);
echo "<br/>";
echo $sec->dec($phone);

?>
