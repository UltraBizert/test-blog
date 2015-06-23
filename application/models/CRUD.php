<?php

function Create ($user_id, $message_header, $message){

	$message_header = htmlspecialchars($message_header);
	$message_header = mysql_real_escape_string($message_header);
	$message = htmlspecialchars($message);
	$message = mysql_real_escape_string($message);

	$query="INSERT INTO `messages` (`user_id`,`header_message`, `message`)
			VALUE ('".$user_id."','".$message_header."','".$message."')";
	mysql_query($query);

	header('Location:/access');
}

function Delete_message($message_id){
		mysql_query("DELETE FROM messages WHERE id = ".$message_id."");
		header ('Location:/access');
}

function Edit ($id){
	$_SESSION['message_id'] = $id;

	$query = "SELECT * FROM messages WHERE id = '".$id."'";
	$result = mysql_query($query);
	$result = mysql_fetch_array($result);

	if(!empty($_POST['header_edit']))
		$_POST['header_edit'] = htmlspecialchars($_POST['header_edit']);
	else
		$_POST['header_edit'] = $result['header_message'];

	if(!empty($_POST['message_edit']))
		$_POST['message_edit'] = htmlspecialchars($_POST['message_edit']);
	else
		$_POST['message_edit'] = $result['message'];

	include_once 'application/views/edit_view.php';
}

function Update ($header_edit, $message_edit, $id){
	$header = htmlspecialchars($header);
	$header = mysql_real_escape_string($header);
	$message = htmlspecialchars($message);
	$message = mysql_real_escape_string($message);

	mysql_query("UPDATE messages SET
					header_message = '".$header."',
					message = '".$message."'
					WHERE id = '".$id."'");

	header ('Location:/access');
}

function ADD ($comment, $user_id, $id){
	$comment = htmlspecialchars($comment);
	$comment = mysql_real_escape_string($comment);

	mysql_query("INSERT INTO comments (`comment`,`user_id`,`message_id`) 
					VALUE ('".$comment."','".$user_id."','".$id."') ");

	header ('Location:/access');
}

function GetNav($p, $num_pages){

	if($p - 2 > 0){
		$prev_2_page = ' <a href="/access/index/?page='.($p - 2).'">'.($p - 2).'</a> ';
	}
	else{
		$prev_2_page = '';
	}

	if($p - 1 > 0){
		$prev_1_page = ' <a href="/access/index/?page='.($p - 1).'"> '.($p - 1).' </a> ';
	}
	else{
		$prev_1_page = '';
	}

	if($p + 2 <= $num_pages){
		$next_2_page = ' <a href="/access/index/?page='.($p + 2).'"> '.($p + 2).' </a> ';
	}
	else{
		$next_2_page = '';
	}

	if($p + 1 <= $num_pages){
		$next_1_page = ' <a href="/access/index/?page='.($p + 1).'">'.($p + 1).'</a> ';
	}
	else{
		$next_1_page = '';
	}

	$nav = $prev_2_page.$prev_1_page.$p.$next_1_page.$next_2_page;

	return $nav;
}
?>