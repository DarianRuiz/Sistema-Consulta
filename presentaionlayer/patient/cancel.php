<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Paciente</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Doctor<span>Paciente</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">Mi informacion</a></li>
			<li><a href=" book.php">Reservar cita</a></li>
			<li><a href="view.php">Ver citas</a></li>
			<li><a href="cancel.php">Cancelar citas</a></li>
			<li><a href="searchdoctor.php ">Buscar Doctor</a></li>
			<!--<li><a href="donate.php">Donate Organ</a></li>
			<li><a href="searchdonor.php">Search Donar</a></li>-->
			<li><a href="../../applicationlayer/Doctorpatient.php">Cerrar Sesion</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	
<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label>ID cita</label>
		<input type="text" name="AppoID2" >

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn">cancelar</button>
	</div>

	







		</form>
	</form>


</body>
</html>


