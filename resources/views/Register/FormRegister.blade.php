<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>

<div class="col-md-4"></div>
<div class="col-md-4">
	<h2>REGISTER AKUN</h2>
	<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			<form action=" {{route('register.tambah')}} " method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label>MASUKAN EMAIL</label>
					<input type="email" name="email" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>MASUKAN USERNAME</label>
					<input type="text" name="username" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>MASUKAN NAMA</label>
					<input type="text" name="nama" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>MASUKAN PASSWORD</label>
					<input type="password" name="ps1" class="form-control" required=""> 
				</div>
				<input type="submit" name="simpan" value="REGISTER" class="btn btn-info" >
			</form>
		</div>
	</div>
</div>


</body>
</html>