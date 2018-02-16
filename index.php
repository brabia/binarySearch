<?php
	/**
	-------------------------------------
	| binarySearch
	-------------------------------------
	*/
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require 'binarySearch.php';
	
	$binarySearch = new BinarySearch(
		array('debug' => true)
	);
	echo ($binarySearch->binarySearch(89, array(99, 1, 55, 2, 3, 5, 8, 13, 21, 34, 56, 89, 144)) > -1)?'Found':'Not Found';
?>