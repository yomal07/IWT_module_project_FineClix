<?php
	include 'subconfig.php';
	
?>

<?php
	session_start();
	$fname = $_POST["firstName"];
	$lname = $_POST["lastName"];
	$phone = $_POST["mobile"];
	$nic = $_POST["nic"];
	$address = $_POST["address"];
	$mail = $_POST["mail"];
	$type = $_POST["events"];
	$cardN = $_POST["cardNo"];
	$cvc = $_POST["cvc"];
	
	$sql = "insert into event(firstname,lastname,mobilenumber,nic,address,email,eventtype,cardno,cvc) VALUES ('$fname','$lname','$phone','$nic','$address','$mail','$type','$cardN','$cvc')";
	
	$_SESSION['$fname'] = $fname;
	$_SESSION['$lname'] = $lname;
	$_SESSION['$phone'] = $phone;
	$_SESSION['$nic'] = $nic;
	$_SESSION['$address'] = $address;
	$_SESSION['$mail'] = $mail;
	$_SESSION['$type'] = $type;
	$_SESSION['$cardN'] = $cardN;
	$_SESSION['$cvc'] = $cvc;
	$_SESSION['name'] = $fname;
	
	
	header("Location:clarke.php");
	
	if($conn->query($sql)){
		echo "<script>alert ('Inserted successfully') </script>";
	
	}
	else{
		echo "<script>alert ('Insertion failed')</script>";
	}

$conn -> close();


?>