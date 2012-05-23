<?php

$number1 = 0;
$number2 = 0;
$function = 0;
$value = 0;

if (isset ($_POST['number1'])) {
	$number1 = $_POST['number1'];
}

if (isset ($_POST['number2'])) {
	$number2 = $_POST['number2'];
}

if (isset ($_POST['function'])) {
	$function = $_POST['function'];
}

switch ($function) {
    case 'add':
        $value = $number1 + $number2;
        break;
    case 'sub':
         $value = $number1 - $number2;
        break;
    case 'mul':
         $value = $number1 * $number2;
        break;
	case 'div':
         $value = $number1 / $number2;
        break;
}

$total = $value * 1.13;

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Money Calculator Form</title>
		<link rel="stylesheet" href="css/general.css">
	</head>

<body>

	<h1>Canadian Money Calculator</h1>

	<form method="post" action="index.php">
	
		<label for="number1">Number 1</label>
		<input type="number1" name="number1" min="1"/>
		
		<label for="number2">Number 2</label>
		<input type="number2" name="number2" min="1"/>
		
	
		<label for="function">Function</label>
		<select id="function" name="function">
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
		</select>
		
		<button type="calculate">Calculate</button>
		
	<p>Total with tax: $<?php echo number_format($total, 2); ?> </p>

</body>
</html>