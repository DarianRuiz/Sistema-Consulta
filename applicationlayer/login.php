<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Paciente</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Iniciar sesion</h2>
</div>

<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>ID usuario</label>
		<input type="text" name="UserID">

	</div>




	<div class="input-group">
		<label>Contraseña</label>
		<input type="Password" name="password">



	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		No sos miembro? <a href="1st.php">Registrarse </a>
	</p>
	




</form>

</body>
</html>