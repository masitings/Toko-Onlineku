<div class="container">
	<div class="row" style="width: 500px;margin: auto;">
		<div class="col-md-12">
			<h2 class="text-center">Register New User</h2>
			<form method="post" action="/action/User.php" class="form-horizontal">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama Anda">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" placeholder="email@gmail.com">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" >
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Telepon</label>
					<input type="text" name="telp" class="form-control" placeholder="081355449900">
				</div>
				<div class="form-group">
					<label>Kota</label>
					<input type="text" name="kota" class="form-control" placeholder="DKI Jakarta">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea class="form-control" name="alamat" style="resize:none"></textarea>
					<input type="hidden" name="act" value="register">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary form-control">Register</button>
				</div>
			</form>
		</div>
	</div>

</div>