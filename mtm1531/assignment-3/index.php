<?php

require_once 'includes/form-processor.php';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Registration Form Validation</title>
		<link href="css/general.css" rel="stylesheet" >
	</head>

<body>

	<form method="post" action="index.php">
	
		<div>
			<label for="name">Name <?php if (isset($errors['name'])) : ?><strong class="error">is required</strong><?php endif; ?></label>
			<input id="name" name="name" required value="<?php echo $name; ?>">
		</div>
			
		<div>
			<label for="email">E-mail Address<?php if (isset($errors['email'])) : ?><strong class="error"> is required</strong><?php endif; ?></label>
			<input type="email" id="email" name="email" required value="<?php echo $email; ?>">
		</div>
		
		<div>
			<label for="username">Username <?php if (isset($errors['username'])) : ?><strong class="error">a user name is required and must be less than 25 characters</strong><?php endif; ?></label>
			<input id="username" name="usernamename" required value="<?php echo $username; ?>">
		</div>
		
		
	
<?php endif; ?>
	

</body>
</html>