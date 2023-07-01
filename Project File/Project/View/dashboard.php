<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>
	
	<?php 
	session_start();
	if(!isset($_COOKIE['rem'])) {
        header('location: /Project/View/logout.php');
    }
	if (isset($_SESSION['username'])) {		

	} else {
		header("location: /Project/View/login.php");
	}
 	?>

	<div style="background-color: #93B4FF">
		<?php include '../View/teacherpanel.php';?>				
	</div>	

	<br>

	<div>
		<fieldset style="background-color: #FCA3A3">
			<form>
				<div>
					<table>
						<tr>
							<td style="width: 300px;">
								<label><b>Account</b></label> 
								<hr> <br>
								<ul>
									<li><a href="/Project/View/dashboard.php">Dashboard</a></li>
									<li><a href="/Project/View/customer.php">Customer Details</a></li>
									<li><a href="/Project/View/query.php">Query</a></li>
									<li><a href="/Project/View/viewprofile.php">View Profile</a></li>
									<li><a href="/Project/View/editprofile.php">Edit Profile</a></li>
									<li><a href="/Project/View/changepassword.php">Change Password</a></li>
									<li><a href="/Project/View/Logout.php">Logout</a></li>
								</ul>
							</td>
							<td style="width: 1000px; font-size: 30px; text-align: center; vertical-align: text-top;">Welcome to Tesla 24/7 - isp <b><?php echo $_SESSION['name'];?></b></td>
						</tr>
					</table>
				</div>
			</form>
		</fieldset>
	</div>

	<br>

	<div style="background-color: #D5E2E1">
		<?php include '../View/footer.php';?>
	</div>
</body>
</html>