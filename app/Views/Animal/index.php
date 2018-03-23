</head>

<body>
	
	<form action="../../Controller/AnimalController.php" method="post">
		<label for="nameAnimal"></label>
		<input type="text" id="nameAnimal" name="nameAnimal">
		<label for="speciesAnimal"></label>
		<input type="text" id="speciesAnimal" name="speciesAnimal">
		<label for="beedAnimal"></label>
		<input type="text" id="beedAnimal" name="beedAnimal">
		<label for="ageAnimal"></label>
		<input type="text" id="ageAnimal" name="ageAnimal">
		<label for="statureAnimal"></label>
		<input type="text" id="statureAnimal" name="statureAnimal">
	</form>

<?php 

	$listAnimal = AnimalController();
	$listAnimal->

?>
