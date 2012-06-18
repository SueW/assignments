<?php

$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$motion_picture_rating = filter_input(INPUT_POST, 'motion_picture_rating', FILTER_SANITIZE_STRING);


if ($_SERVER['REQUEST_METHOD'] =='POST'){
	if (strlen($name) < 1 || strlen($name) > 60){
		$errors['name'] = true;
	}

	if (strlen($release_date) < 1 || strlen($release_date) > 12){
		$errors['release_date'] = true;
	}
	
	if (strlen($director) < 1 || strlen($director) > 30){
		$errors['director'] = true;
		
	}
	
	if (strlen($motion_picture_rating) < 1 || strlen($motion_picture_rating) > 10){
		$errors['motion_picture_rating'] = true;
		
		$sql = $db->prepare('
			INSERT INTO movies (name, release_date, director, motion_picture_rating)
			VALUES (:name, :release_date, :director, :motion_picture_rating)
		');
		
		$sql-> bindValue(':name', $name, PDO::PARAM_STR);
		$sql-> bindValue(':release_date', $release_date, PDO::PARAM_STR);
		$sql-> bindValue(':director', $director, PDO::PARAM_STR);
		$sql-> bindValue(':motion_picture_rating', $motion_picture_rating, PDO::PARAM_STR);
		$sql-> execute();
		
		header('Location: index.php');
		exit;

	}
}



?><!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<title>Add New 80s Movie</title>
	<link href="css/general.css" rel="stylesheet" >
</head>
<body>
	
	<h1>Add a New 80s Movie</h1>
		
	<form method="post" action="add.php">

		<div>
			<label for="name">
			Movie Title
			<?php if (isset($errors['name'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?></label>
			<input id="name" name="name" required value="<?php echo $name; ?>">
		</div>
		
		<div>
			<label for="release_date">
			Release Date
			<?php if (isset($errors['release_date'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?></label>
			<input id="release_date" name="release_date" required value="<?php echo $release_date; ?>">
		</div>
		
		<div>
			<label for="director">
			Director's Name
			<?php if (isset($errors['director'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?></label>
			<input id="director" name="director" required value="<?php echo $director; ?>">
		</div>
		
		<div>
			<label for="motion_picture_rating">
			Motion Picture Rating
			<?php if (isset($errors['motion_picture_rating'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?></label>
			<input id="motion_picture_rating" name="motion_picture_rating" required value="<?php echo $motion_picture_rating; ?>">
		</div>
		
	
		
		<button type="submit">Add</button>
		
					
	</form>
	
	
	
</body>
</html>