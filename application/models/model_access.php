<?php

class model_access extends model {

	function __construct() {
		session_start();
		require_once 'DB_connection.php';
		require_once 'CRUD.php';
	}

	function add_message(){

		if(isset($_POST['new_message']))
		{
			include_once 'application/views/new_message_view.php';
		}

		if((isset($_POST['save'])))
		{
			$message_header=trim($_POST['message_header']);
			$message=trim($_POST['message']);

			if((!empty($message_header)) and (!empty($message)))
			{
				$_SESSION['say']='Message added';
				Create($_SESSION['user_id'], $message_header, $message);
			}
			else
			{
				echo 'Fill all fields';
				include_once 'application/views/new_message_view.php';
			}
		}
	}

	function get_data() {

		$num_elements = 3;

		$total = mysql_result( mysql_query("SELECT count(*) FROM messages;"), 0, 0);

		$num_pages = ceil($total / $num_elements);

		if(isset($_POST['logout']))
		{
			session_destroy();
			setcookie("token", " ", time()-3600);
			header("Location:/main");
		}

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

		$sel = "SELECT * FROM `messages` LIMIT ".$start.", ".$num_elements;
		$query = mysql_query($sel);
		$result=mysql_num_rows($query);

		if(isset($_POST['edit']))
		{
			if(!empty($_POST['user_id']))
			{
				$_SESSION['magic']=$_POST['user_id'];
			}
			Edit($_POST['user_id']);
		}
		var_dump($_POST);

		if(isset($_POST['edit']))
		{
			$header_edit=trim($_POST['header_edit']);
			$message_edit=trim($_POST['message_edit']);

			if((!empty($header_edit)) and (!empty($message_edit)))
			{
				$_SESSION['say']='Message edited';
				Update($header_edit,$message_edit,$_SESSION['message_id']);
			}
			else
			{
				Edit($_SESSION['magic']); 
				echo 'Fill all fields';
			}

		}

		if(isset($_POST['delete']))
		{
			Delete_message($_POST['h']);
		}

		if(isset($_POST['comment']))
		{
			if(isset($_POST['h'])) 
			{
				$_SESSION['message_id']=$_POST['h'];
			}
			include_once 'application/views/add_comment_view.php';
		}

		if(isset($_POST['add_comment']))
		{
			$comment=trim($_POST['comment']);

			if(!empty($comment))
			{
				$_SESSION['say']='Comment added';
				ADD($comment,$_SESSION['user_id'],$_SESSION['message_id']);
			}
			else
			{
				echo 'Fill field';
				include_once 'application/views/add_comment_view.php';
			}
		}

		if(isset($_POST['see_comments']))
		{
			$comment=  filter_input(INPUT_POST, 'h');
			$query="SELECT * FROM comments WHERE message_id='".$comment."'";
			$result=mysql_query($query);
			include_once 'application/views/comments_view.php';
		}
		var_dump($_SESSION);
		// if(empty($_SESSION['user_id']) $_SESSION['user_id'] = null;
		$data['p'] = $p;
		$data['num_pages'] = $num_pages;
		$data['query'] = $query;
		$data['result'] = $result;
		$res = mysql_fetch_array($data['query']);
		var_dump($res);
		return $data;
	}
}
