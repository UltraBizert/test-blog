<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Blog</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link href="../../css/blog.css" rel="stylesheet">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
				<a class="blog-nav-item active" href="/">Home</a>
				<a class="blog-nav-item" href="/">Users</a>
				<a class="blog-nav-item" href="/access">Posts</a>
				<a class="blog-nav-item pull-right" href="/login/login_in">Login</a>
				<a class="blog-nav-item pull-right" href="/login/registration">Registration</a>
			</nav>
		</div>
	</div>
	<div class="container">
		<?php include 'application/views/'.$content_view; ?>
	</div>
</body>
</html>