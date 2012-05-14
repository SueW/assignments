<?php

var_dump($_POST);

?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Money Calculator Form</title>
	</head>

<body>

	<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
	<form method="post" action="index.php">
	
		<label for="number">Number 1</label>
		<input type="number" name="number" min="1"/>
		
		<label for="number">Number 2</label>
		<input type="number" name="number" min="1"/>
		
	
		<label for="function">Function</label>
		<select id="function" name="function">
			<option value=add>+</option>
			<option value=sub>-</option>
			<option value=sub>*</option>
			<option value=div>/</option>
		</select>
							
		<button type="submit">Submit</button>
		</form>
	<?php else : ?>
	
	
	<?php endif; ?>


</body>
</html>