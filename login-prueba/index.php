<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div class="login-box">
		<h1>Log In</h1>
		<form method="POST" action="hola.php"> <!-- Cambia "resultado.php" por el nombre de tu página de destino -->
			<label for="username">Numero de usuario</label>
			<input type="text" id="username" name="username" placeholder="Ingrese su numero" class="fondo">
			<label for="password">Contraseña</label>
			<div class="password-wrapper">
				<?php if(isset($_POST['toggle-password']) && isset($_POST['password_visible'])): ?>
					<input type="text" id="password" name="password" placeholder="Ingrese su contraseña" value="<?php echo $_POST['password']; ?>" class="fondo">
				<?php else: ?>
					<input type="password" id="password" name="password" placeholder="Ingrese su contraseña" class="fondo">
				<?php endif; ?>
				<button type="submit" name="toggle-password">Mostrar</button>
			</div>
			<input type="submit" value="Iniciar sesión">
		</form>
	</div>
</body>
</html>