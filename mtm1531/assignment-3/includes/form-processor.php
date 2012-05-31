<?php

$errors = array(); //creates an empty array

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
$preferredlang = filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_NUMBER_INT);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING); 


if ($_SERVER['REQUEST_METHOD'] =='POST') {
	
	// 0 is considered empty
	// Empty: 0, false, null, '', arraay(), '0'
	
	if (empty($name)) {
		$errors['name'] = true;
	
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		$errors['email'] = true;
	
	
	if (strlen($username) < 1 || strlen($username) > 25) 
		$errors['username'] = true;
	
	
	if (empty($password)) 
		$errors['password'] = true;
	
	
	if (!in_array($preferredlang, array('english','french','spanish')))
		$errors['preferredlang'] = true;

	
	if (!isset($_POST['acceptterms']))
		$errors['acceptterms'] = true;
		
			
	if (empty($errors)) 
		//$headers = 'From: ' . $name . ' <' . $email . '>';
		mail($email, $preferredlang,"Thanks for registering", "From: susanwoodford17@gmail.com");
	
	}
}
