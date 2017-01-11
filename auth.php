<?php
	session_start();
	require_once 'inc/querydb.php';

	$details = $_POST;
	$fullname = $details["name"];
	$firstname = explode(" ", $fullname)[0];
	$middlename = '';
	$lastname = '';
	if (isset(explode(" ", $fullname)[1])) {
		$middlename = explode(" ", $fullname)[1];
	}
	if (isset(explode(" ", $fullname)[2])) {
		$lastname = explode(" ", $fullname)[2];
	}


	$password = $details["password"];
	if (($firstname == "admin") && ($password == "boss")) {
		$_SESSION['isLoggedIn'] = true;
		$_SESSION['name'] = $firstname;
		$_SESSION['user'] = 'admin';
		header("Location: admin");
		exit();
	}
	 $result = array();
	if (empty($result)) {
		$result = querydb("SELECT * FROM teachers WHERE firstname = '$firstname' AND middle_name = '$middlename' AND lastname = '$lastname' AND password = '$password'");
		$user = 'teacher';
	}

	if (empty($result)) {
		$result = querydb("SELECT * FROM parents WHERE firstname = '$firstname' AND middle_name = '$middlename' AND lastname = '$lastname' AND password = '$password'");
		$user = 'parent';
	}

	if (empty($result)) {
		$result = querydb("SELECT * FROM students WHERE firstname = '$firstname' AND middle_name = '$middlename' AND lastname = '$lastname' AND password = '$password'");
		$user = 'student';
	}

	if (empty($result)) {
		header('location:./');
		exit();
	}


	if ($user == "student") {
		$password = querydb("SELECT password FROM students WHERE firstname = ''");
		$_SESSION['user'] = 'student';
		$_SESSION['name'] = $firstname;
		$_SESSION['isLoggedIn'] = true;
		header("Location: student");
	} elseif ($user == "teacher") {
		$_SESSION['user'] = 'teacher';
		$_SESSION['name'] = $firstname;
		$_SESSION['isLoggedIn'] = true;
		header("Location: teacher");
	} elseif ($user == "parent") {
		$_SESSION['user'] = 'parent';
		$_SESSION['name'] = $firstname;
		$_SESSION['isLoggedIn'] = true;
		header("Location: parent");
	}



?>