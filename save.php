<?php
	
	include('database.php');
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$bday=$_POST['bday'];
	$gender=$_POST['gender'];
	
	$lname='none';
	$contact1=strlen($contact);
	$contact2=substr('$contact', 0, 2);

	 
 	$age = date_diff(date_create($bday), date_create('now'))->y;

	if($contact1==11 and $contact2==09){
		if(preg_match('/^[.a-zA-Z, ]*$/', $fname) ){

		$sql = "INSERT INTO `mypropelrr` ( `firstname`, `lastname`, `gender`, `email`, `address`, `birth_date`, `age`) VALUES ('$fname', '$lname', '$gender', '$email', '$contact', '$bday','$age')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	}else{

		echo json_encode(array("statusCode"=>202));
	}
	}else{
		echo json_encode(array("statusCode"=>203));
	}

	
	//echo "<script>alert('$gender');</script>";


	
	mysqli_close($conn);
?>

