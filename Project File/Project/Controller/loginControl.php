<?php
	session_start();
	$username = $password = "";
	$usernameErr = $passwordErr = "";
	$isEmpty = $isValid = false;

	if (isset($_SESSION['username'])) {		
		header("location: /Project/View/dashboard.php");
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$remember = $_POST['remember'];

		function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = test($_POST["user"]);
        $password = test($_POST["pass"]);
        $remember = test($_POST["remember"]);

        if(empty($username)) 
            $isEmpty = true;

        if(empty($password))
            $isEmpty = true;

		if(!$isEmpty){
			if($remember == "") {
	            setcookie('rem', 'remember', time() + 5, '/');
	        }
	        else {
	            setcookie('rem', 'remember', 0, '/');
	        }
	        
	        $server = "localhost";
	        $db_user = "root";
	        $db_pass = "";
	        $dbname = "isp";
	        $ezl = new mysqli($server, $db_user, $db_pass, $dbname);

	        if ($ezl->connect_error) {
	            die("Data base Connection failed: " . $ezl->connect_error);
	        }

	        
	        $sql = "SELECT * FROM customers";
	        $row1 = $ezl->query($sql);
		
			
			if($row1->num_rows > 0) {
	            while($customers = $row1->fetch_assoc()) {
	                if($customers['Username'] == $username and $customers['Password'] == $password) {
	                    $_SESSION['id'] = $customers['ID'];
	                    $_SESSION['name'] = $customers['Name'];
	                    $_SESSION['email'] = $customers['Email'];
	                    $_SESSION['gender'] = $customers['Gender'];  
	                    $_SESSION['dob'] = $customers['DateOfBirth'];
	                    $_SESSION['phone'] = $customers['Contact'];

	                    $_SESSION['username'] = $username;
	                    $_SESSION['password'] = $password;

	                    header("Location: /Project/View/dashboard.php");
	                    $isValid = true;
	                }
	            }
	        }	
			

			if(!$isValid) {
	            header("Location: /Project/View/login.php");
	            setcookie('msg', "❌Username or Password incorrect<br><br>", time() + 1, "/");
	    	}
		}
		else
		{
			header("Location: /Project/View/login.php");
			setcookie('msg', '❌Please input  Username and Password<br><br>', time() + 1, "/");
		}
	}
?>