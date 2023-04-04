<?php

$connection = new mysqli("localhost","root","","project");

if($connection -> connect_error){
	die("error connection". $connection -> connect_error);
}

$pName = $_POST['name'];
$pDescription = $_POST['description'];
$p_price = $_POST['price'];

$result = $connection -> query("select * from profiles,product where profile_id = product_id");
if(mysqli_num_rows($result) > 0){
	echo("name exist add produt");
	if ($connection -> query("INSERT INTO products(product_id, profile_id, name, description,price,created_at) VALUES (,1,'$pName','$pDescription','$p_price','')")) 
	{
    	echo "New product added successfully";
	}	
}

else {
	echo "Error while creating a new record";
}

$connection -> close();
?>
