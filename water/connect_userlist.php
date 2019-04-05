<?php

$host = "172.22.25.3";
$usr="priyen";
$pass="priyen@312";
$db="userlist";

$conn = new mysqli($host,$usr,$pass,$db);
if($conn->connect_error)
{
	echo "Connection to $host failed";
}

?>