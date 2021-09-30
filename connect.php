<?php
	$firstName = $_POST['firstName'];
	$description = $_POST['description'];
	$startTime = $_POST['startTime'];
	$endTime = $_POST['endTime'];
	$dayWeek = $_POST['dayWeek'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO events(firstName, description, startTime, endTime, dayWeek) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $description, $startTime, $endTime, $dayWeek);
		$execval = $stmt->execute();
		echo $execval;
		echo "Submitted Successfully...";
		$stmt->close();
		$conn->close();
	}
?>