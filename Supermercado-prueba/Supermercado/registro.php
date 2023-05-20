<!DOCTYPE html>
<html>
<head>
    <title>Registro de Productos</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
    <header>
        <h2>Registro de Productos</h2>
    </header>
    <form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
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
        <input type="submit" value="Registrar">
    </form>
    <section class="prodPublicados">
        
    </section>
</body>
</html>