<?php
@session_start();
@$m=$_REQUEST['m'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator Login</title>
</head>

<body>
<form method="post" action="check.php">
	<label>Username </label><input type="text" name="username" required></br><br/>
	<label>Password </label><input type="password" name="pass" required></br><br/>
	<input type="submit" name="submit">
</form>
<script src="../js/sweetalert.min.js"></script>
<?php
if($m==2)
{
?>
    <script>swal("Sorry", "Provided info is wrong!", "error");</script>
<?php
}
elseif($m==3)
{
?>
    <script>swal("Warning", "There is not a user with such information!", "warning");</script>
    <?php
}
?>
</body>
</html>