<?php


	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'email');
	$city = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$country = filter_input(INPUT_POST, 'country');
	$zip = filter_input(INPUT_POST, 'zip');
	$pass = filter_input(INPUT_POST, 'pass');
	$cpass = filter_input(INPUT_POST, 'cpass');

	if(!empty($fname) || !empty($lname) || !empty($email) || !empty($city) || !empty($state) || !empty($country) || !empty($zip) || empty($pass) || !empty($cpass))
	{

		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "registrationdb";

		//create connection

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

		if(mysqli_connect_error())
		{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}

		else
		{
			$SELECT = "SELECT email From table1 where email = ? Limit 1";
			$INSERT = "INSERT Into table1 (fname, lname, email, city, state, country, zip, pass, cpass) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";


			//prepare statement


			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();

			$stmt->mysqli_bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			if($rnum==0){
				$stmt->close();


				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssssssss", $fname , $lname, $mail, $city, $state, $country, $zip, $pass, $cpass);
				$stmt->execute();
				echo "inserted sucessfully";

			}
			else{
				echo "someone already register usin this email";
			}

			$stmt->close();
			$conn->close();
		}
	}
	else{
		echo "all fields are required";
		die();
	}



?>