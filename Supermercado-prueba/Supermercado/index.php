<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/registroStyle.css">
	
</head>
<body>
	<div class="login-box">
		<h1>Log In</h1>
		<form class="form_ingreso" method="post" action="index.php"> 
			<label for="username">Nombre de usuario</label>
			<input required maxlength=32 type="text" id="" name="user" placeholder="Ingrese su usuario" class="fondo">
			<label for="password">Contraseña</label>
			<input required maxlength=32 type="password" id="" name="password" placeholder="Ingrese su contraseña" class="fondo">
			<input type="submit" value="Iniciar sesión" name="ingresar">
		</form>
	</div>
	<?php
		if(isset($_POST['ingresar'])){
			$conn = mysqli_connect("localhost", "root", "", "supermercado");
			
			if (!$conn) {
				die("Conexión fallida: " . mysqli_connect_error());
			}

			$user = $_POST["user"];
			$password = $_POST['password'];

			$sql = "SELECT id, user, pass FROM usuarios WHERE user = '$user'";

			$ejecutar = mysqli_query($conn, $sql);
			$fila = mysqli_fetch_array($ejecutar);

			if($password == $fila['pass']){
				?>
					<style>
						.login-box{
							display: none;
						}
						header{
							display: flex;
						}
						.form_registro{
							display: block;
						}
					</style>
				<?php
			}
			else echo "Contraseña incorrecta";

            mysqli_close($conn);
		}
	?>
    <header>
        <h2>Registro de Productos</h2>
    </header>
    <form class="form_registro" action="#" method="POST" enctype="multipart/form-data">
        <label>Nombre del Producto:</label>
        <input type="text" maxlength=32 name="nombre" required>
        
        <label>Precio s/IVA:</label>
        <input type="number" maxlength=20 min=0.01 step="0.01" name="precio" required>
        
        <label>Peso KG:</label>
        <input type="number" maxlength=20 min=0.01 step="0.01" name="peso" required>
        
        <label>Proveedor:</label>
        <input type="text" maxlength=64 name="proveedor" required>
        
        <label>Imagen:</label>
        <input type="text" maxlength=400 name="imagen" required>
        <br>
        <input type="submit" value="Registrar" name="registrar">
    </form>
	<?php
		if(isset($_POST['registrar'])){
			$conn = mysqli_connect("localhost", "root", "", "supermercado");
			
			if (!$conn) {
				die("Conexión fallida: " . mysqli_connect_error());
			}

			$nombreProd = $_POST["nombre"];
			$precioProd = $_POST['precio'];
			$pesoProd = $_POST['peso'];
			$proveedor = $_POST['proveedor'];
			$imagen = $_POST['imagen'];


			$sql = "INSERT INTO producto (nombre, peso, foto, precio, proveedor) 
			VALUES ( '$nombreProd', '$pesoProd', '$imagen', '$precioProd', '$proveedor')";

			$ejecutar = mysqli_query($conn, $sql);

            mysqli_close($conn);
		}
	?>
</body>
</html>