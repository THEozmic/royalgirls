<?php
	require_once "insertdb.php";
	insertdb($_POST, NULL, "teachers");
	header("Location: ../admin");

?>