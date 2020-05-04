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

    


   


	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "table1";
	// creat connection
	$con = new myqli($host, $dbusername, $dbpassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO account (fname, lname, email, city, state, country, zip, pass, cpass)
		values ('$fname. $lname, $email, $city, $state, $country, $zip, $pass, $cpass')";

		if($conn->query($sql){
			echo "inserted successfully";

		}
		else{
			echo "Error : ".$dql,"<br>",$conn->error;
		}
		$conn->close();
	}
?>