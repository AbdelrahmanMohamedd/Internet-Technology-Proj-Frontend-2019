<?php

$connection = new mysqli("localhost","root","","project");

if($connection -> connect_error){
	die("error connection". $connection -> connect_error);
}

$uName = $_POST['username'];
$phone = $_POST['phone_number'];
$uEmail = $_POST['email'];
$uPass = $_POST['password'];
$MN= $_POST['manager_name'];
$logo = $_POST['logo'];
$bio = $_POST['bio'];
$FB= $_POST['facebook'];
$insta = $_POST['instagram'];


if ($connection -> query("INSERT INTO profiles(profile_id,username, phone_number,email,password,manager_name,logo,latitude,longitude,bio,facebook,instagram,created_at) VALUES (,$uName','$phone','$uEmail','$uPass','$MN','$logo',,,'$bio','$FB','$insta','')")) 
{
    echo "New record created successfully";
}
else {
	echo "Error while creating a new record";
}

$connection -> close();
?>
