<?php


require_once 'includes/db.php';

$sql = $db->query('SELECT id, name, release_date, director, motion_picture_rating FROM movies ORDER BY name ASC');
//the above just points to the results but still to fetch them (see below)

$results = $sql->fetchAll();

?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Top Flicks from the 80s</title>
	</head>
	
	<body>
		
		<?php foreach ($results as $flicks) : ?> 
		<h2>
			<a href="single.php?id=<?php echo $flicks['id']; ?>">
				 <?php echo $flicks['name'] ?></a></h2>
		<dl>
			<dt>Release Date</dt>
			<dd><?php echo $flicks['release_date']; ?></dd>
			<dt>Director</dt>
			<dd><?php echo $flicks['director']; ?></dd>
			<dt>Motion Picture Rating</dt>
			<dd><?php echo $flicks['motion_picture_rating']; ?></dd>
		</dl>
		<?php endforeach; ?>
	
	
	
	
	
	
	
	
	
	
	</body>
</html>