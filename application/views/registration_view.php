<form method="POST" action="/login/registration">
	<div class="form-group">
		<label>Login</label>
		<input class="form-control" name="login" placeholder="Login">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>First name</label>
		<input class="form-control" name="first_name" placeholder="First name">
	</div>
	<div class="form-group">
		<label>Last name</label>
		<input class="form-control" name="last_name" placeholder="Last name">
	</div>
	<div class="form-group">
		<label class="radio-inline">
			<input type="radio" name="gender" value="male"> male
		</label>
		<label class="radio-inline">
			<input type="radio" name="gender" value="female"> female
		</label>
	</div>
	<div class="form-group">
		<label>Birth day</label>
		<input class="form-control" name="birthday" placeholder="Birth day">
	</div>
	<button type="submit" class="btn btn-default">Registration</button>
</form>