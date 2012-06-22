<?php

require_once 'includes/db.php';

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

$sql = $db->prepare('
SELECT id
FROM users
WHERE username = :username
');
$sql->bindValue(':username', $username, PDO::PARAM_STR);
$sql->execute();
$results = $sql->fetch();

if (empty($results)) {
	echo 'available';
} else {
	echo 'unavailable';
}

$sql = $db->prepare('
SELECT id
FROM users
WHERE email = :email
');
$sql->bindValue(':email', $email, PDO::PARAM_STR);
$sql->execute();
$results = $sql->fetch();

if (empty($results)) {
	echo 'available';
} else {
	echo 'unavailable';
}