<?php
	function mysql_connect($host, $id, $pw)	{
		return mysqli_connect($host, $id, $pw);
	}

	function mysql_select_db($dbname, $connect)	{
		return mysqli_select_db($connect, $dbname);
	}

	function mysql_query($sql, $connect) {
		return mysqli_query($connect, $sql);
	}

	function mysql_fetch_array($result)	{
		return mysqli_fetch_array($result);
	}
?>
