<?php
$arrUsers = array(
	array(
		"username" => "admin",
		"password" => "admin"
	),
	array(
		"username" => "user",
		"password" => "user"
	)
);

$username = $_POST['username'];
$password = $_POST['password'];

$isFound = FALSE;

foreach($arrUsers as $objUser){
	if($objUser['username'] == $username && $objUser['password'] == $password){
		$isFound = TRUE;
		break;
	}
}

if($isFound){
	echo "user found";
}else{
	echo "user not found";
}