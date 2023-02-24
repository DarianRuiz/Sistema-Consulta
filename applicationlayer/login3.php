<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body class="Abody">
	<div class="Aheader">
	<h2>Iniciar sesion</h2>
</div>

<form method="post" action="login3.php" class="Aform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupA">
		<label>ID Admin</label>
		<input type="text" name="adminID">

	</div>




	<div class="input-groupA">
		<label>Contraseña</label>
		<input type="Password" name="adminpassword">



	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA"> Login</button>
	</div>

	
	




</form>

</body>
</html>