<?php
	if(isset($_COOKIE['token'])){
		header('Location:/login/login_in_cookie');
	}

	if(!empty($data)){
		foreach($data AS $error) {
			print $error."<br>";
		}
	}
?>
<form class="form-horizontal" action="/login/login_in" method="POST">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Login</label>
		<div class="col-sm-10">
			<input class="form-control" name="login" placeholder="Login">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<div class="checkbox">
			<label>
				<input name="remember" type="checkbox"> Remember me
			</label>
		</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Sign in</button>
		</div>
	</div>
</form>
