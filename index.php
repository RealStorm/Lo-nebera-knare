<?php 
include "../functions/functions.php"; 
	if(isset($_POST["lon"]) && (isset($_POST["sats"]) && (isset($_POST["namn"])))){ 

		$hundra =100; 
		$namn =$_POST["namn"]; 
		$efternamn = $_POST['efternamn'];
		$lon = $_POST["lon"]; 
		$sats = $_POST["sats"]; 
		$skatten = $lon * $sats / $hundra; 
		$netto = $lon - $skatten; 

		$message = "din lön är $netto"; 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Lön Beräknare</title>
	<link rel="stylesheet" href="../assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
</head>
<body>
	<h1>Löne Beräknare med angiven skattesats</h1>
	<!-- Validering av formen sker igen jquery och genom input atributet -->
	<form name="form1" method="POST" action="">

		<label for="namn">Ditt Namn</label><br>
		<input name="namn" type="text" placeholder="Namn" class="charonly"><br>

		<label for="efternamn">Ditt Efternamn</label><br>
		<input name="efternamn" type="text" placeholder="Efternamn" class="charonly"><br>

		<label for="sats">Din Skattesats %</label><br>
		<input name="sats" type= "text" placeholder="Skattesats" class="numbersonly" min="10" max="45" maxlength="2"><br>

		<label for="lon">Din Lön</label><br>
		<input name="lon" type="text" placeholder="Lön" class="numbersonly" min="10000" max="45000" maxlength="5"><br>

		<input class="button" type="submit" value="Beräkna">

	</form>
	<div>
	<h3>Lönebesked</h3>
		<p class="message">
			<?php 
				echo  "$namn " . $efternamn . "'s lön är $netto efter skatt.";
			?>
		</p>
		<p class="message">
			<?php
			echo "Beräkning baserad på brutto lön : " .  $lon . " och procenstasen" . " $sats  %.";
			?>
		</p>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		jQuery('.numbersonly').keyup(function () { 
    		this.value = this.value.replace(/[^0-9\.]/g,'');
		});
		jQuery('.charonly').keyup(function() {
			this.value = this.value.replace(/[^A-Za-z]/g,'');
		});
	</script>
</body>
</html>