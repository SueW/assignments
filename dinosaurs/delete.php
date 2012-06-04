<?php

// this file does a deletion and redirects users go back to the index page

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) { // these three lines of code say: if no id, then redirect back to the homepage
	header('Location: index.php');
	exit;
}

$sql = $db->prepare('
	DELETE FROM dinosaurs
	WHERE id = :id
');
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();

header('Location: index.php');
exit;



