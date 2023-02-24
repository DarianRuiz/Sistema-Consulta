<?php include '../../datalayer/bookserver.php'; ?>
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


	
<form method="post" action="searchpatient.php" class="patientsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Buscar por:</label>
		<label style="font-weight: bold">*ID paciente</label>
		<label style="font-weight: bold">*Nombre Paciente</label>
		<input type="text" name="PID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Buscar</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Informacion Paciente</caption>>

		<tr>
		<th>ID paciente</th>
		<th>Nombre</th>
		<th>Direccion</th>
		<th>Nombre Contacto</th>
		<th>Email</th>
		<th>Tipo de sangre</th>


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP="SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
		$resultP=$mysqli->query($sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Bloodtype']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
			<?php 	
				 if (isset($_POST['SearchP'])) {

         ?>	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Historial de tratamiento</caption>>
		<tr>
		<th>ID paciente</th>
		<th>Nombre paciente</th>
		<th>Tratamiento</th>
		<th>Notas de doctor</th>	


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP2="SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["descID"]."</td><td>".$rowP2["descName"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
	


</body>
</html>


