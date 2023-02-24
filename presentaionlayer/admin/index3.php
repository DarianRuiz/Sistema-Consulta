<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Doctor<span>Paciente</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index3.php">Añadir/Borrar Doctor</a></li>
			<li><a href="viewdoctor.php">Ver Doctor</a></li>
			<li><a href=" viewpatients.php">Ver Pacientes</a></li>
			<li><a href="viewappointments.php">Ver Citas</a></li>
			<!--<li><a href="searchdonoradmin.php">Search Donor</a></li>-->
			<!--<li><a href="feedback.php">FeedBack</a></li>-->

  			<li><a href="../../applicationlayer/Doctorpatient.php">Cerrar Sesion</a></li>

			



	
			

		</ul>
		



	</nav>




</header>
<body>

		<div class="headerA">
	<h2>Añadir Doctor</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>ID Doctor</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Nombre Doctor</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Direccion</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Numero de contacto</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Contraseña</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Categoria</label>
	   	<select name="addcategory" class="xd">
	   		<option value="Huesos" >Huesos</option>
	   		<option value="Corazon">Cardiologo</option>
	   		<option value="Dentista">Dentista</option>
	   		<option value="Salud Mental">Salud Mental</option>
	   		<option value="Cirujano">Cirujano</option>

	   		


	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Añadir Doctor</button>
	</div>


	




</form>
	<div class="headerAD">
	<h2>Borrar Doctor</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>ID Doctor</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Borrar</button>
	</div>

</form>





	

</body>
</html>