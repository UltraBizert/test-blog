<?php

class model_main extends model {

	function __construct() {
		session_start();
		require_once 'DB_connection.php';
		require_once 'CRUD.php';
	}

	function users() {
		$arr = array();

		$num_elements = 3;

		$total = mysql_result( mysql_query("SELECT count(*) FROM users;"), 0, 0);

		$num_pages = ceil($total / $num_elements);

		if(!isset($_GET['page']))
		{
			$p = 1;
		}
		else
		{
			$p = strip_tags(trim($_GET['page']));
			if ($p < 1) $p = 1;
		}


		if($p > $num_pages)
		{
			$p = $num_pages;
		}

		$start = ($p - 1) * $num_elements;

		$sel = "SELECT * FROM `users` LIMIT ".$start.", ".$num_elements;
		$query = mysql_query($sel);
		$result=mysql_num_rows($query);

		$data['p'] = $p;
		$data['num_pages'] = $num_pages;
		$data['query'] = $query;

		$data['result'] = $result;
		return $data;
		}
	}
