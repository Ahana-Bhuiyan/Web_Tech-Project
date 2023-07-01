<?php 
	session_start();
	if(!isset($_COOKIE['rem'])) {
        header('location: /Project/View/logout.php');
    }
	if (isset($_SESSION['username'])) {		

	} else {
		header("location: /Project/View/login.php");
	}
	$ezl = new mysqli("localhost", "root", "", "isp");
    if ($ezl->connect_error) {
        die("Data base Connection failed: " . $ezl->connect_error);
    }

    $sql = "SELECT * FROM managers";
    $result = $ezl->query($sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Customer's List
	</title>
</head>
<body>
	<div>
		<?php include '../View/teacherpanel.php';?>				
	</div>

	<br>

	<div>
		<fieldset style="position: relative; background-color: #7EFDBB">
				<div>
					<table>
						<tr>
							<td style="width:300px;">
								<label><b>Account</b></label>
								<hr> <br>
								<ul>
									<li><a href="/Project/View/dashboard.php">Dashboard</a></li>
									<li><a href="/Project/View/customer.php">Customer Details</a></li>
									<li><a href="/Project/View/viewprofile.php">View Profile</a></li>
									<li><a href="/Project/View/query.php">Query</a></li>
									<li><a href="/Project/View/editprofile.php">Edit Profile</a></li>
									<li><a href="/Project/View/changepassword.php">Change Password</a></li>
									<li><a href="/Project/View/Logout.php">Logout</a></li>
								</ul>
							</td>

							<td>
								<fieldset style="width:300px; height:300px; background-color: #E37AF6">
									<legend><h2>Customer's</h2></legend>
									<table>
										<tr>
											<ul>
												<li><a href="/Project/View/customerlist.php">Customer List</a></li>
												<li><a href="/Project/View/notice.php">Notice</a></li>
											</ul>
										</tr>										
									</table> <br>
								</fieldset>
							</td>

							<td>
								<fieldset style="width: 800px; height: auto; overflow: scroll; background-color: #8AD7F0">
									<legend><h2>Customer List</h2></legend>

									<div style="position: absolute; left: auto; right: 4%; top: 15%;">
										<form action="../Controller/searchstudent.php" method="get" onsubmit="student(this); return false;">
											<input type="text" id="search" name="Search" placeholder="Search Student">
											<input type="submit" name="submit" value="🔎">
										</form>
									</div>

									<br>
									<div id="records" align="center">
										<table border="1" align="center">
								            <tbody>
								                <tr>
								                    <th>ID</th>
								                    <th>Name</th>
								                    <th>Date of Birth</th>
								                    <th>Religion</th>
								                    <th>Email</th>
								                    <th>Phone No</th>
								                    <th>Subject</th>
								                    <th colspan="2">Action</th>
								                </tr>

								                <?php
								                    if ($result->num_rows > 0) {
								                        while ($data = $result->fetch_assoc()) {
								                            echo "<tr>";
								                            echo "<td>" . $data['ID'] . "</td>";
								                            echo "<td>" . $data['FirstName'] . " " . $data['LastName'] . "</td>";
								                            echo "<td>" . $data['DateOfBirth'] . "</td>";
								                            echo "<td>" . $data['Religion'] . "</td>";
								                            echo "<td>" . $data['Email'] . "</td>";
								                            echo "<td>" . $data['PhoneNo'] . "</td>";
								                            echo "<td>Web Technology</td>";
								                            echo "<td>" . "<a href='/Project/Controller/deleteStudentControl.php?id=" . $data['ID'] . "'>Delete</a></td>";
								                            echo "<td>" . "<a href='/Project/View/editcustomer.php?id=" . $data['ID'] . "'>Edit</a></td>";
								                            echo "</tr>";
								                        }
								                    }
								                    else {
								                        echo "<tr>";
								                        echo "<td>--</td>";
								                        echo "<td>--</td>";
								                        echo "<td>--</td>";
								                        echo "<td>--</td>";
								                        echo "<td>--</td>";
								                        echo "<td>--</td>";
								                        echo "<td>--</td>";
								                        echo "<td>--</td>";
								                        echo "</tr>";
								                    }
								                ?>
								            </tbody>
								        </table>
								    </div>
									<p style="text-align: center;"><a href="addcustomer.php">Add Customer</a></p>
								</fieldset>
							</td>
						</tr>
					</table>
				</div>
		</fieldset>
	</div>
	<br>
	<div align="center">
		<?php include '../View/footer.php'?>
	</div>
	<script>
		function student(stdnt) {
			let search = stdnt.search.value;
			let resulturl = stdnt.action;
			document.getElementById('records').innerHTML = "";

			if(search === "") {
                alert('Empty Search!');
			}
			else {
				let xhttp = new XMLHttpRequest();
				xhttp.onload = function(){
					document.getElementById('records').innerHTML = this.responseText;
				}

				xhttp.open("GET", resulturl + "?student=" + search);
				xhttp.send();
			}
		}
	</script>
</body>
</html>