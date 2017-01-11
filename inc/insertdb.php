<?php
	// Version 0.2
	// data is an array: array("column_name" => "column_data");
	// table is name of table;
	// usage: $result = insertdb($_POST, $_FILES, "users");
	// or insertdb(array("column_name" => "column_data"), null, "table");
	// returns true if successfull and error message if failed




	require_once "db_connect.php";
	require_once "querydb.php";

	function insertdb($data, $data_file, $table) {
		$colums = "";
		$colums_values = "";

		$length = count($data); // length of array of data
		$i = 0; // counter



		foreach ($data as $key => $value) {
			$colums .= $key; // add item
			$colums_values .= '"'.$value.'"'; // add item


			// we need to prevent last comma from appending to the column and the value so  we don't get "michael",
			// last item skipper:

			if(++$i !== $length) {
				$colums .= ","; // add comma
				$colums_values .= ","; // add comma

			}

		}

		$sql = "INSERT INTO $table ($colums) VALUES ($colums_values)";

		$query = mysqli_query($GLOBALS['connect'], $sql);

		if (isset($data_file)) {
			// Do file uploads
			//$last_id = mysqli_insert_id($GLOBALS['connect']);
			//insert_upload($data_file, $last_id, "./royalgirls/uploads", $table);
		}
		if (!$query) { // check if we get an error
			    printf("Error: %s\n", mysqli_error($GLOBALS['connect'])); // print error
			    exit(); // kill the stuff
		} else {
			return true;
		}

	}

 	function insert_upload($data_file, $last_id, $folder, $table) {
		//if they DID upload a file...
if($_FILES['photo']['name'])
{
	//if no errors...
	if(!$_FILES['photo']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file
		$valid_file = true;

		if($_FILES['photo']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
		}

		//if the file has passed the test
		if($valid_file)
		{
			//move it to where we want it to be
			move_uploaded_file($_FILES['photo']['tmp_name'],'uploads/'.$new_file_name);
			$message = true;
			insertdb("array('photo' => $folder.$new_file_name )", NULL, $table);
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];

	}
} return message;
	}
?>