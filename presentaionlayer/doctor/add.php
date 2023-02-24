<?php include ('../../datalayer/bookserver.php'); ?>
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

<form method="post" action="add.php" class="add">







	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-group">
		<label style="font-weight: bold;">ID Paciente</label>
	   	<input type="text" name="Patientsearch" class="xd">


	</div>





	<div class="input-group">
		<button type="submit" name="SearchPA" class="btn">Buscar</button>
	</div>











	<?php  


	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>

<div class="input-group">
		<label>ID paciente</label>
		<input type="text" name="descID" value="<?php echo $row2['UserID']; ?>">

	</div>




	<div class="input-group">
		<label>Nombre</label>
		<input type="text" name="descName" value="<?php echo $row2['Name']; ?>">

	</div>

	<div class="input-group">
		<label>Tratamiento</label>
		<input type="text" name="Treatment">
	</div>

	<div class="input-group-add">
		<label>Nota</label>
		<input style="" type="text" name="Note">
	</div>


	 <div class="input-group">
			<button type="submit" name="AddD" class="btn">Añadir</button>
			</div>


	<?php  

	}
	 ?>

			 </div>
	 
		
	   
	  
	 

	 
	
	  
<?php 
}


	    ?>




	    <?php  


if (isset($_POST['AddD'])) {
	include ('../../datalayer/errors.php');
	    	$errors=array();

	$descID 			= $mysqli -> real_escape_string($_POST['descID']);
	$descName 			= $mysqli -> real_escape_string($_POST['descName']);
	$treatment 			= $mysqli -> real_escape_string($_POST['Treatment']);
	$note				= $mysqli -> real_escape_string($_POST['Note']);

	
	







if (empty($treatment)) {
	array_push($errors,"Treatment is required");
	# code...
}

if (empty($note)) {
	array_push($errors,"Your note is required");
	# code...
}








if(count($errors)==0){



	$sql7 = "INSERT INTO  description (descID,descName,treatment,note,doctorIDdesc) VALUES ('$descID','$descName','$treatment','$note','$doctorprofile') ";
	if ($mysqli -> query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Your Description Is Added",$mysqli->affected_rows);?></h2>
			
			
		<?php 



	}
}
}














?>









</form>





</body>

</html>