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
$messageid=$_GET['id'];
$select=$db->select("messages","id='$messageid'");
$r=mysqli_fetch_array($select);
$name=$sec->dec($r['name']);
$email=$sec->dec($r['email']);
$phone=$sec->dec($r['phone']);
$message=$sec->dec($r['message']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Status</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
	th, td {
    padding: 10px;
}
</style>
</head>

<body>
<h2>Message</h2>
<table>
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Phone</td>
		<td style="width:800px;">Message</td>
	</tr>
	<tr>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $phone; ?></td>
		<td><?php echo $message; ?></td>
	</tr>
</table>
<br/>
<h2>Change Status</h2>
<form method="post" action="changestatus.php">
<input type="hidden" name="id" value="<?php echo $messageid; ?>"> 
<label>status </label><textarea name="status" cols="50" rows="10" required></textarea>
<br/>	
</br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
}
else{
	header("location:logout.php");
}
?>