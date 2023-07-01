<?php 
	session_start();
	if (isset($_SESSION['username'])) {		
		header("location: ../View//dashboard.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<div style="background-color: #93B4FF">
		<?php include '../View/header.php';?>				
	</div>	

	<br>

	<div align="center" style="width:400px; background-color: #FFCE84">
		<?php
			if (isset($_COOKIE['msg'])) {
			 	echo $_COOKIE['msg'];
			} 
		?>
		<form action="../Controller/loginControl.php" method="post">
			<fieldset style="margin-left: auto; margin-right: auto;">
				<table>
					<tr>
						<td>User Name</td>
						<td>:</td>
						<td><input type="text" name="user"><?php if (isset($_COOKIE['user'])) {echo $_COOKIE['user'];} ?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="pass"><?php if (isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?></td>
					</tr>		
				</table>
				<input type="checkbox" name="remember" id="rem"><label for="rem">Remember me</label>
				<hr>
				<input type="submit" name="login" value="login">
			</fieldset>
		</form>		
	</div>

	<br>

	<div style="background-color: #D5E2E1">
		<?php include '../View/footer.php';?>
	</div>

</body>
</html>