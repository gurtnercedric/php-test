<!DOCTYPE html>
<html lang="de">

<head>
	<title>Modul 307 LB</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" href="./css/font-awesome.css">

</head>

<body>
	<?php 
		// Hier wird SESSION bereits gestartet und weitere PHP Anweisungen ausgeführt.
		include('./php/nav.php');
	?>


	<div class="container theme-showcase" role="main">

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Herzlich Willkommen</h1>
			<p>Hier können Sie Ihre Formularelemente platzieren. 
				Für die Umsetzung stehen Ihnen folgende Ressourcen zur Verfügung: index.php, style.css, classes.php, ajax.php, form.php, functions.js</p>
		</div>

		<?php include('./php/form.php'); ?>
	
		

	</div>
	
	
			<div  class="hidden" id="fehler"></div>
				
			</div>
			
			<br>
			<div class="hidden" id="ausgabe">
			<center><h2>Zeiterfassung</h2></center>
			<br>
			
			<table class="table">
			<thead class="thead">
			<td class="formhead"><h3>Mitarbeiter</h3></td>
			<td class="formhead"><h3>Datum</h3></td>
			<td class="formhead"><h3>Zeit</h3></td>
			<td class="formhead"><h3>Projekt</h3></td>
			<td class="formhead"><h3>Arbeiten</h3></td>
			<td class="formhead"><h3>Verrechenbar</h3></td>
			</thead>
			
			<tbody id="ergebnis" >
			
			
			</tbody>
			
			</table>
			</div>


</body>

<body>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/functions.js"></script>
</body>

</html>

<!-- # GClNvtWWWrmmj2MuLtJL9e8b+padnX2ge/2mdB41GWNpe5F/dOiB6xFggRXGdVqRk== -->
<!-- # sourceMappingURL=bootstrap.css.map -->