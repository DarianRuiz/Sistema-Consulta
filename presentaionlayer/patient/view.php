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
	<h1 class="my">Mi<span class="mys">Cita</span></h1>

	<table class="table2">
		<tr>
		<th>ID Cita</th>
		<th>Fecha</th>
		<th>Hora</th>
		<th>ID Doctor</th>
		<th>Nombre Doctor</th>
		<th>Direccion</th>
		<th>Numero de Contacto</th>
		<th>Categoria</th>

		</tr>
		<?php $sql3="SELECT  * FROM bookapp , doctor   WHERE patientID=('$userprofile') AND  docID=DoctorID "  ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3["docID"]."</td><td>".$row3['Doctorname']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["categorey"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>


<!--	<table class="table3">
		<tr>
		<th>Nombre doctor</th>
		<th>Direccion</th>
		<th>Contacto</th>
		<th>Categoria</th>
		doctor.Doctorname , doctor.Address,doctor.ContactNumber,doctor.category
,doctor
AND docID= ('$userprofile')
.$row3["Doctorname"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3["category"]

		</tr>
		<?php $sql4="SELECT doctor.Doctorname,doctor.Address,doctor.ContactNumber,doctor.category FROM doctor " ;
		$result4=$mysqli->query($sql4);
		if(mysqli_num_rows($result4)>1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["Doctorname"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["category"]."</td></tr>";
			}
			echo "</table";


	


		}

		?>
		
	</table>


-->


</body>
</html>

