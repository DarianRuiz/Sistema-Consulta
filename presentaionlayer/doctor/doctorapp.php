<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Doctor<span>Paciente</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">Mi informacion</a></li>
			<li><a href="doctorapp.php">Mis citas</a></li>
			<li><a href="searchpatient.php">Buscar Pacientes</a></li>
			<li><a href="add.php">Añadir Descripcion</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Cerrar Sesion</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1">My<span class="mys">Citas</span></h1>

	<table class="table2">
		<tr>
		<th>ID Citas</th>
		<th>Fecha</th>
		<th>Hora</th>
		<th>ID paciente</th>
		<th>Nombre paciente</th>
		<th>Direccion paciente</th>
		<th>Email paciente</th>
		<th>Numero de contacto</th>
		<th>Tipo de sangre</th>

		

		</tr>
		<?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('$doctorprofile') AND  patientID=UserID "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>

