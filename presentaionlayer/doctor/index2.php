<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 >Doctor<span>Paciente</span></h1>
		<nav>
		


		
		<ul > 
			
		
			<li><a href="index2.php">Mi informacion</a></li>
			<li><a href="doctorapp.php">Mis citas</a></li>
			<li><a href="searchpatient.php">Buscar Pacientes</a></li>
			<li><a href="add.php">Añadir Descripcion</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Cerrar Sesion</a></li>
			
			



	
			

		</ul>
		



	</nav>




</header>
<body >

	<div class="header">
	<h2>Mi Informacion</h2>
</div>
<form method="post" action="index2.php" class="info">


 


<div class="Dcontent">


	<label>ID: <?php echo "" .isset($_SESSION['DoctorID']);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $colD['email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Nombre : <?php echo $colD['Doctorname']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Direccion : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Numero de contacto : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Especializado en: <?php echo $colD['categorey']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   



	
        
           
	
</div>

  



 


</form>









	






</body>
</html>