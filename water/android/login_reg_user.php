<?php
require 'connect.php';
session_start();

if($_POST)
{

	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$mobile=$_POST['mob'];
	$name=$_POST['name'];

	$queryUser = "SELECT * from `login` where `username`='$user';";
	$resultUser = $conn->query($queryUser);
		
	if($resultUser->num_rows>0)
	{
		$queryPass = "select * from `login` where `username`='$user' and `password`='$pass'";

		$resultPass = $conn->query($queryPass);
		if ($resultPass->num_rows > 0)
		{
			$json['successL'] = ' Welcome '.$user;
			//echo json_encode($json);
		}
		else
		{
			$json['errorL'] = "Invalid username or Password";
		}
	}
	else
	{

		if(isset($_POST['user'], $_POST['pass'], $_POST['email'], $_POST['mob']))
		{
			$queryI = "insert into `login` (`username`, `password`, `email`, `mobile`) values ('$user', '$pass', '$email', '$mobile')";

			$resultI = $conn->query($queryI);
			if ($resultI)
			{
				$json['successReg'] = ' Welcome '.$user;
				//echo json_encode($json);
			}
			else
			{
				$json['errorReg'] = "Account was not created. Try changing username";
				//echo json_encode($json);
			}
				
		}
		else
		{
			$json['errorReg'] = "Please register. Fill all the details.";
			//echo json_encode($json);
		}
	}

	echo json_encode($json);
}

?>