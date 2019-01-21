<?php
session_start();
if(isset($_SESSION['admin']))
{
include ("../config.php");
include ("../library.php");
$id=$_SESSION['admin'];
$db=new db($host,$dbusername,$dbpassword,$dbname);
$link=$db->connect();
$sec=new security_system($seckey);
	
$select=$db->select("admins","id='$id'");
	$count=mysqli_num_rows($select);
		if($count==1)
		{
			$r=mysqli_fetch_array($select);
			$name=$sec->dec($r['name']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administration Panel</title>
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
<h2>Welcome dear <?php echo $name; ?></h2>
<div>
	<?php
	@$message=$_GET['message'];
	if($message==1)
	{
		echo "The status of the message changed successfully!";
	}
	if($message==2)
	{
		echo "Something went wrong. Please try again!";
	}
	?>
</div>
<h3>Unread Messages</h3>
<table>
<tr>
	<td>No</td>
	<td>Name</td>
	<td>Email</td>
	<td>Phone</td>
	<td>Message</td>
	<td>Change Status</td>
</tr>
<?php
$unmselect=$db->select("messages","readbyadmin=0");
$num=0;
while($umr=mysqli_fetch_array($unmselect))
{
	++$num;
	?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $sec->dec($umr['name']); ?></td>
		<td><?php echo $sec->dec($umr['email']); ?></td>
		<td><?php echo $sec->dec($umr['phone']); ?></td>
		<td style="width:800px;"><?php echo $sec->dec($umr['message']); ?></td>
		<td><a href="status.php?id=<?php echo $umr['id'];?>">change status</a></td>
	</tr>
	<?php
}
?>
</table>
<br/>
<h3>Read Messages</h3>
<table>
<tr>
	<td>No</td>
	<td>Name</td>
	<td>Email</td>
	<td>Phone</td>
	<td>Message</td>
	<td>Status</td>
	<td>Change Status</td>
</tr>
<?php
$mselect=$db->select("messages","readbyadmin=$id");
$mnum=0;
while($mr=mysqli_fetch_array($mselect))
{
	++$mnum;
	?>
	<tr>
		<td><?php echo $mnum; ?></td>
		<td><?php echo $sec->dec($mr['name']); ?></td>
		<td><?php echo $sec->dec($mr['email']); ?></td>
		<td><?php echo $sec->dec($mr['phone']); ?></td>
		<td style="width:400px;"><?php echo $sec->dec($mr['message']); ?></td>
		<td style="width:400px;"><?php echo $sec->dec($mr['status']); ?></td>
		<td><a href="status.php?id=<?php echo $mr['id'];?>">change status</a></td>
	</tr>
	<?php
}
?>
</table>
<br/>
	<h4><a href="logout.php">logout</a></h4>
</body>
</html>
<?php
}
		}
else
{
	header("location:logout.php");
}

?>