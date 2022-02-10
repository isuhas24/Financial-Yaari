<html>
	<head>
		<title> User login and registration </title>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-form">
					<h2> Login here </h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<br>
						<button type="submit" class="btn btn-primary"> Login 
						</button>
					</form>
				</div>
				<div class="col-md-6 register-form">
					<h2> Register here </h2>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label> First name </label>
							<input type="text" name="firstname" class="form-control" required>
						</div>
						<div class="form-group">
							<label> Middle name </label>
							<input type="text" name="middlename" class="form-control" required>
						</div>
						<div class="form-group">
							<label> Last name </label>
							<input type="text" name="lastname" class="form-control" required>
						</div>
						<div class="form-group">
						    <label> Email </label>
						    <input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
						    <label> Phone number </label>
						    <input type="tel" name="phonenumber" class="form-control" required pattern="[0-9]{10}" title="Ten digits code">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<br>
						<button type="submit" class="btn btn-primary"> Register 
						</button>
					</form>
				</div>
			</div>
			</div>
		</div>
	</body>
</html>