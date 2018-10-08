<?php

$host="localhost";
$user="root";
$pass="";
$db="webdas";


  	try {

		$pdo = new PDO("mysql:host={$host}; dbname={$db};", $user, $pass);

		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {

		print "Koneksi atau query bermasalah : " . $e -> getMessage() . "<br>";

		die();

	}

$nim =$_POST['nim'];
$nama =$_POST['nama'];
$fakultas=$_POST['fakultas'];
$jeniskelamin =$_POST['jeniskelamin'];
$kelas=$_POST['kelas'];
$hobi=$_POST['hobi'];
$alamat=$_POST['alamat'];


$query=$pdo -> prepare("INSERT INTO mahasiswa Values
 ('$nim','$nama','$fakultas','$jeniskelamin','$kelas','$hobi','$alamat')");
$query->execute();
if ($query)
	header("location:login.php");
else
	die("tambah data gagal");
?>


