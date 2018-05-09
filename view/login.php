<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Login User</h2>
			<form method="post" action="/action/User.php">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="hidden" name="act" value="login">
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>