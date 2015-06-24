<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Blog</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link href="../../css/blog.css" rel="stylesheet">
	<link href="../../js/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet">

	<script src="../../js/blog.js";></script>
	<script src="../../js/jquery-ui-1.11.4/jquery-ui.min.js";></script>
</head>
<body>
	<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
				<a class="blog-nav-item active" href="/">Home</a>
				<a class="blog-nav-item" href="/main/users">Users</a>
				<a class="blog-nav-item" href="/access/index">Posts</a>
				<a class="blog-nav-item pull-right" id="login" 
					onclick="login();" href="/login/login_in">
				Log in</a>
				<a class="blog-nav-item pull-right" href="/login/registration">Registration</a>
			</nav>
		</div>
	</div>
	<div class="container">
	<br>
		<?php //if (isset($_SESSION['user_id']) header('/login/login_in');
		include 'application/views/'.$content_view; ?>
	</div>
</body>
</html>