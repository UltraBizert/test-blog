<?php

class model_login extends model {

	function __construct() {
		session_start();
		require_once 'DB_connection.php';
	}

	function login_in_cookie()
	{
		$token=htmlspecialchars($_COOKIE['token']);

		$query="SELECT * FROM users WHERE cookie='".$token."';";
		$result=mysql_query($query);
		$result=mysql_fetch_array($result);

		if(isset($result['user_login']) and isset($result['cookie']))
		{
			$_SESSION['access'] = "yes";
			$_SESSION['login'] = $result['user_login'];
			$_SESSION['user_id'] = $result['user_id'];

			header("Location:/access");
		}
		else header('Location:/main');
	}

	function login_in (){
		$err=array();

		if(!empty($_POST))
		{
			$login= trim($_POST['login']);
			$login= htmlspecialchars($login);
			$login= mysql_real_escape_string($login);

			$query="SELECT * FROM users WHERE user_login='".$login."' and user_password='".sha1($_POST['password'])."';";
			$result=mysql_query($query);
			$con=mysql_fetch_array($result);

			if(isset($con['user_login']) and isset($con['user_password']))
			{
				$_SESSION['access'] = "yes";
				$_SESSION['login'] = $con['user_login'];
				$_SESSION['user_id'] = $con['user_id'];

			if (isset($_POST['remember']))
				{
					$token = $con['user_login'];
					$token .= 'cookie';
					setcookie("token", $token, time()+3600, "/");

					$query = "UPDATE users SET cookie='".$token."' 
							WHERE user_login='".$con['user_login']."'";
					mysql_query($query);
				}

			header("Location:/access");
			}
			else
			{
				$err[]= "Wrong login or password";
				return $err;
			}
		}
	}

	function registration (){
		$err=array();

		if(!empty($_POST))
		{
			$login = htmlspecialchars($_POST['login']);
			$password = htmlspecialchars(sha1($_POST['password']));
			$first_name = htmlspecialchars($_POST['first_name']);
			$last_name = htmlspecialchars($_POST['last_name']);
			$gender = htmlspecialchars($_POST['gender']);
			$birthday = htmlspecialchars($_POST['birthday']);

			$query=mysql_query("SELECT user_login FROM users WHERE user_login='".$login."'");

			if(!preg_match("/^[a-z,A-Z,0-9]+$/", $login))
				$err[]="логин может быть только из букв латинского алфавита и цифр";

			if(strlen($login)<3 or strlen($login)>15)
				$err[]="логин должен быть меньше 15 символов и больше 3";

			if(strlen($_POST['password'])<3 or strlen($_POST['password'])>15)
				$err[]="пароль должен быть меньше 15 символов и больше 3";

			if(mysql_num_rows($query)!=0)
				$err[]="пользователь с таким логином уже существует";

			if(count($err)==0)
			{
				$q = "INSERT INTO users SET 
								user_login='".$login."',
								user_password='".$password."',
								first_name='".$first_name."',
								last_name='".$last_name."',
								gender='".$gender."',
								date='".$birthday."'
								";
				mysql_query($q);
				$err[]="User ".$login." registrated";
			}
			return $err;
		}
	}
}
