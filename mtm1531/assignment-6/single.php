<?php

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// ->prepare() allows us to have variables in our SQLK
// We can create placeholders and later fill them with some content
// By using prepare we are protecting against SQL injection attacks
// Placeholders are marked with a colon (:) in front of them

$sql = $db->prepare('
	SELECT id, name, release_date, director, motion_picture_rating
	FROM movies
	WHERE id =	:id
');

//bindValue(placeholder, variable, datatype)
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch();

?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $results['name']; ?> &middot;Movies</title>
		<link href="css/general.css" rel="stylesheet" >
	</head>
	
	<body>
	
	
	<h1><?php echo $results['name']; ?></h1>
	<dl>
		<dt>Release Date:</dt>
			<dd><?php echo $results['release_date']; ?></dd>
			<dt>Director:</dt>
			<dd><?php echo $results['director']; ?></dd>
			<dt>Motion Picture Rating:</dt>
			<dd><?php echo $results['motion_picture_rating']; ?></dd>
	</dl>
	
	<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
	<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
	
	</body>
	
	
	</html>