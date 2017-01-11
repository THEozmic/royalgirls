<?php
	require_once "db_connect.php";
	error_reporting(E_ALL);
	function querydb($query_build) {

    		$query = mysqli_query($GLOBALS['connect'], $query_build);
    		$query_build = strtolower($query_build);

    		// Patch for DELETE query
    		if (strpos($query_build, 'delete') !== false) {
    			return "Record Deleted";
    		}

    		// Patch for UPDATE query

    		if (strpos($query_build, 'update') !== false) {
    			return "Record Updated";
    		}


    		if (!$query) {
			    printf("Error: %s\n", mysqli_error($GLOBALS['connect']));
			    print('Query: '.$query_build);
			    exit();
			}

    		$n = 0;
    		$result = [];

	    	while ($a = mysqli_fetch_array($query, MYSQLI_ASSOC)) {

	            $result[$n] = $a;

	            $n++;
	        }

	        unset($a);


			if (!$query) { // check if we get an error

				printf("Error: %s\n", mysqli_error($GLOBALS['connect']));
				print('Query: '.$query_build);
			    exit();

			}
			return $result;
	}
?>