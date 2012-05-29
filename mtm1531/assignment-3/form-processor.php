<?php

$errors = array(); //creates an empty array

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$preferredlang = filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_STRING);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING); 
$acceptterms = filter_input(INPUT_POST, 'acceptterms', FILTER_SANITIZE_STRING); 

if ($_SERVER['REQUEST_METHOD'] =='POST') {
	
	// 0 is considered empty
	// Empty: 0, false, null, '', arraay(), '0'
	if (empty($name)) {
		$errors['name'] = true;
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	
	if (mb_strlen($username) < 5 || mb_strlen($username) > 26) {
		$errors['username'] = true;
	}
	
	if (empty($password)) {
		$errors['password'] = true;
	}
	
	if ($preferredlang != 'english' || $preferredlang != 'french' || $preferredlang != 'spanish'){
		$errors['preferredlang'] = true;
	}
	
	if (!isset($_POST['acceptterms'])){
		$errors['acceptterms'] = true;
		
	}
			
	if (empty($errors)) {
		$headers = 'From: ' . $name . ' <' . $email . '>';
		mail('susanwoodford17@gmail.com', $posible_subjects[$subject], $message, $headers);
	}
