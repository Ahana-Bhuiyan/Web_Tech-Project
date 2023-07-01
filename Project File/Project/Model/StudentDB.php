<?php 
	require 'Connect.php';
    
    function delete($id) {
        $ezl = connect();
        $sql = "DELETE FROM customers WHERE ID=$id";
        $qry = $ezl->query($sql);

        header('location: ../View/studentlist.php');
    }

    function edit($id, $fname, $lname, $religion, $dob, $phone, $email, $username) {
    	$ezl = connect();
        $sql = "UPDATE customers SET FirstName='$fname', LastName='$lname', Email='$email', Religion='$religion', DateOfBirth='$dob', PhoneNo='$phone' WHERE ID=$id";
        $qry = $ezl->query($sql);

        header("location: /Project/View/studentlist.php");
        $ezl->close();
    }
    
    function get($firstname) {
        $conn = connect(); 

        $sql = "SELECT * FROM managers Where FirstName LIKE ?";
        $stmt = $conn->prepare($sql);
        $fname = $firstname;
        $fname = "%" . $fname . "%";
        $stmt->bind_param("s", $fname);

        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        $conn->close();

        return $result;
    }
?>