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


	
<form method="post" action="searchdoctor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Buscar por:<br>*ID doctor<br>*Nombre Doctor<br>*Categoria</label>
		<input type="text" name="dID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Buscar</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>ID Doctor</th>
		<th>Nombre Doctor</th>
		<th>Direccion</th>
		<th>Numero de contacto</th>
		<th>Categoria</th>

		</tr> <?php  


		$dID =$mysqli -> real_escape_string($_POST['dID']);

		$sql6="SELECT  * FROM  doctor   WHERE 	Doctorname=('$dID') OR DoctorID=('$dID') OR categorey=('$dID')" ;
		$result6=$mysqli->query($sql6);
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["DoctorID"]."</td><td>".$row6["Doctorname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['categorey']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
				
	


</body>
</html>


