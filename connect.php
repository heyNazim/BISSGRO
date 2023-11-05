<?php
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','u582595608_clients','Nazim@1908','u582595608_bissgro');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(fullname,  email, phone, subject, message ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $fullname,  $email,  $phone,  $subject,  $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Data submit successfully...😊😊😊 ";
		$stmt->close();
		$conn->close();;
	}
?>