<?php
	$bytes = 0;
	if (isset($_POST['data'])) {
		$bytes = strlen($_POST['data']);
	}
	if (isset($_GET['data'])) {
		$bytes = strlen($_GET['data']);
	}
	if (isset($_FILES['data'])) {
		$bytes = $_FILES['data']['size'];
	}
	header('Content-Type: application/json');
	echo json_encode((object) [
		'timestamp' => date('c'),
		'bytes' => $bytes
	]);