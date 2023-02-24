<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Iniciar sesion</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>ID Doctor</label>
		<input type="text" name="doctorID">

	</div>




	<div class="input-groupD">
		<label>Contraseña</label>
		<input type="Password" name="doctorpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>

	
	




</form>

</body>
</html>