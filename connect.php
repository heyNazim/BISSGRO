<?php
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fullname,  email, phone, subject, message ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $fullname,  $email,  $phone,  $subject,  $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Data submit successfully...";
		$stmt->close();
		$conn->close();
	}
?>