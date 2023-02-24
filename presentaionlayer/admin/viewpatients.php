<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Doctor<span>Patient</span></h1>
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
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Informacion Pacientes</h1>
	<table class="table4">
		<tr>
		<th>ID pacientes</th>
		<th>Nombre Paciente</th>
		<th>Direccion</th>
		<th>Numero de contacto</th>
		<th>Email</th>
		<th>Tipo de sangre</th>

		</tr>

		<?php $sql3="SELECT  * FROM  patients " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["UserID"]."</td><td>".$row3["Name"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3['Email']."</td><td>".$row3['Bloodtype']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>