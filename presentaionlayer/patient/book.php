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


	

	


	<div class="header">
	<h2>Reservar cita</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');?>





	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-group">
		<label>Categoria</label>
	   	<select name="categorey" class="xd">
		    <option value="Huesos" >Huesos</option>
	   		<option value="Corazon">Cardiologo</option>
	   		<option value="Dentista">Dentista</option>
	   		<option value="Salud Mental">Salud Mental</option>
	   		<option value="Cirujano">Cirujano</option>

	   	</select>


	</div>





	<div class="input-group">
		<button type="submit" name="Search" class="btn">Buscar</button>
	</div>











	<?php  

	  if (isset($_POST['Search'])) {

	$categorey = mysqli_real_escape_string($mysqli,$_POST['categorey']);
	
	$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
	$result2=mysqli_query($mysqli,$query2);
	?>
	
		<div class="input-group"> 

			<label>Doctor ID</label>
			

		<select class="input-group2" name="docID">
			
	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		?>
		
	 
		<option> <?php echo $row2['DoctorID'] ?> </option>
		
	   
	  
	   <?php 

	} ?>
	 </select>
	 </div>


	<div class="input-group">
		<label>ID Cita</label>
		<input type="text" name="AppoID" >

	</div>




	<div class="input-group">
		<label>Fecha</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-group">
		<label>Hora</label>
		<input type="Time" name="Time">
	</div>

	 <div class="input-group">
			<button type="submit" name="Book" class="btn">Reservar</button>
			</div>
	 
	 <?php  
}


	    ?>








</form>





</body>

</html>