<!DOCTYPE html>
<html>
<head>
	<title>Vaccines View</title>
</head>
<body>

<div class="container">
	<div class="row">
		<table>
			<thead>
				<tr>Identification Vaccine</tr>
				<tr>Name Vaccine</tr>
				<tr>Description Vaccine</tr>
			</thead>
		
			<tbody id="tabel__vaccine_list">
			
			</tbody>
		</table>
	</div>	

	<div class="row">
		<div class="col-md-6">
			<form method="post" action="../../Controllers/VaccinesController.php?search">
				<input type="text" name="group">
			</form>
		</div>
	</div>
</div>


</body>
</html>