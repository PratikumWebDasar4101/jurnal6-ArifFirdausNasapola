<?php
session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if ($username == "user" and $password=="41098") {
	# code...
	$_SESSION["username"]=$username;
	header("location: pendaftaran.php");
}else{
	echo ("tidak berhasil login");
}

?>