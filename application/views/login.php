<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
		<div class="card p-4" style="width: 400px;">
			<h2 class="text-center mb-4">Login</h2>
			<!-- alert  -->

			<?php echo form_open('auth/login');?>
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control" id="username" placeholder="Enter your username" name="username">
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Enter your password"
					name="password">
			</div>
			<div id=menghilang>
				<?php echo $this->session->flashdata('alert',true) ?>
			</div>
			<div class="d-grid gap-2">
				<button type="submit" class="btn btn-primary">Login</button>
			</div>
			<?php echo form_close(); ?>

		</div>
	</div>

	<!-- Bootstrap 5 JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
</body>

</html>
