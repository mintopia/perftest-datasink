<?php
	$bytes = 0;
	$source = '';
	if (isset($_POST['data'])) {
		$bytes = strlen($_POST['data']);
		$source = 'POST';
	}
	if (isset($_GET['data'])) {
		$bytes = strlen($_GET['data']);
		$source = 'GET';
	}
	if (isset($_FILES['data'])) {
		$bytes = $_FILES['data']['size'];
		$source = 'FILE';
	}
	header('Content-Type: application/json');
	echo json_encode((object) [
		'timestamp' => date('c'),
		'bytes' => $bytes
	]);