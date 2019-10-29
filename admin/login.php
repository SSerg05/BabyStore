<?php
	session_start();

	// Если авторизованній то идем на главную
	if(isset($_SESSION['user']) && $_SESSION['user']) {
		header("location:index.php");
	} 

	// Если пришел запрос на авторизацию
	if(isset($_POST['login'])) {
		if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
			$_SESSION['user'] = true;
			header("location:index.php");
		} else {
			$log["error"][] = "Невірно введений логін або пароль";
		}

	}

	// Если пришел запрос на вихід
	if(isset($_GET['logout'])) {
		session_destroy();
	}
?>

<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrinl-to-fit=no">

		<title>Login Form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<div class="conteiner mt-5">
			<?php if (isset($log['error']) && !empty($log['error'])) :?>
				<?php foreach ($log['error'] as $logItem) :?>
					<div class="alert aletr-danger" role="alert"><?= $logItem; ?></div>
				<?php endforeach; ?>
			<?php endif; ?>
			<div class="row justify-content-center align-items-center" style="min-width: 400px;">
				<div class="col-6">
					<form method="POST" action="login.php">
						<div class="form-group">
							<label for="login">Login</label>
							<input type="text" class="form-control" id="login" name='login' placeholder="Enter login">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>	
				</div>
			</div>
		</div>
	</body>

</html>