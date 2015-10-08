<?php
	include_once("../globals.php");
	$db_handle = mysqli_init();
	//$db_connection = mysqli_real_connect($db_handle, $DB_HOST, $DB_USERNAME, $DB_PASSWD, $DB_DBNAME, $DB_PORT, $DB_SOCKET);
	function get_connection()
	{
		return mysqli_real_connect($db_handle, $DB_HOST, $DB_USERNAME, $DB_PASSWD, $DB_DBNAME, $DB_PORT, $DB_SOCKET);
	}
	
	
?>
