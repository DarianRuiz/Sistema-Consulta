<?php include('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Paciente</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Registrarse</h2>
</div>

<form method="post" action="1st.php" enctype="multipart/form-data">

	<?php include ('../datalayer/errors.php'); ?>

	<div class="input-group">
		<label>ID Usario</label>
		<input type="text" name="UserID" >

	</div>


	<div class="input-group">
		<label>Nombre</label>
		<input type="text" name="Name" >


	</div>

	<div class="input-group">
		<label>Direccion</label>
		<input type="text" name="Address">

	</div>

	<div class="input-group">
		<label>Numero de contacto</label>
		<input type="text" name="ContactNumber">


	</div>


	<div class="input-group">
		<label>Email</label>
		<input type="text" name="Email">

	</div>

	<div class="input-group">
		<label>Contraseña</label>
		<input type="text" name="password">

	</div>

	<div class="input-group">
		<label>Tipo de sangre</label>
		<input type="text" name="bloodtype">

	</div>
   

	<div class="input-group">
		<button type="submit" name="Register" class="btn">Registrarse</button>
	</div>

	<p>
		Ya tiene un usuario? <a href="login.php">Ingresar </a>
	</p>
	




</form>

</body>
</html>