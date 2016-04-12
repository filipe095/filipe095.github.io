<?php
	session_start();

	$dbHost = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "pms";

	#date_default_timezone_set('europe/lisbon');


	try {
		$dbCon = new PDO("mysql:host={$dbHost}; dbname={$dbName};", $dbUser, $dbPass);
		$dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	include_once 'class/class.user.php';
	include_once 'class/class.project.php';

	$project = new PROJECT($dbCon);
	$user = new USER($dbCon);

?>