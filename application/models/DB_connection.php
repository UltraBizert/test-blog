<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "blog";

	$mysql_id = mysql_connect($servername, $username, $password)
	or trigger_error(mysql_error());

	mysql_select_db($dbname, $mysql_id)
	or die ("<p>Error at select BD:".mysql_error()."</p>"); 
