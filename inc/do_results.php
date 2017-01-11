<?php
require_once "querydb.php";
require_once "insertdb.php";
$queries = $_POST["queries"];
//$queries = preg_replace('/(\w+)\s{0,1}:/', '"\1":', str_replace(array("\r\n", "\r", "\n", "\t"), "", $queries));

foreach ($queries as $index => $query) {
	echo "Postion of UPDATE everywhere: ".strpos($query, "UPDATE");

	echo "Empty:: $query :".empty(strpos($query, "UPDATE"));
	if (strpos($query, "UPDATE") === 0) {
		echo "Postion of UPDATE inside update: ".strpos($query, "UPDATE");
		echo $query;
		querydb($query);
		//echo "FOUND";
	} else {
		echo "Postion of UPDATE inside insert: ".strpos($query, "UPDATE");
		//$queries = '"1st_Resumption_Test" => "1", "subject_id" => "2", "student_id" => "2", "term_id" => "1"';
		$update_queries = explode(",",$query);
		//print_r($queries);
		$cn = $cv = "";
		foreach ($update_queries as $index_query => $aquery) {
		    //print_r($aquery);
		    $split_query = explode("=>", $aquery);
		    //print_r($split_query);
		    $cn = $split_query[0];
		    $cv = $split_query[1];
		    $arr[$cn] = $cv;

		}

		print_r($arr);
		insertdb($arr, NULL, "results");
		// to do db insert here
	}

	//echo $query;
}
//print_r ($queries);
?>