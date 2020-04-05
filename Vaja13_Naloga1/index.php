<?php
	if (isset($_GET["nova"])) {
		setcookie("random", "0", time()-1);
		setcookie("i", "0", time()-1);
		setcookie("uganjeno", "0", time()+7200);
	}
	if (!isset($_COOKIE["random"])) {
		$random = rand(1, 100);
		setcookie("random", $random, time() + 7200);
		setcookie("i", "0", time() + 7200);
		setcookie("uganjeno", "0", time()+7200);
	}
?>
<form action="" method="get">
	<input type="number" min="1" max="100" step="1" name="ugib" placeholder="Vpiši število!" required><br>
	<input type="submit" value="Ugibaj!" name="ugibaj">
</form>
<form action="" method="get">
	<input type="submit" value="Nova Igra" name="nova"><br>
</form>
<?php
	if (isset($_GET["ugib"]) && isset($_COOKIE["random"]) && $_COOKIE["uganjeno"] == 0) {
		$i = $_COOKIE["i"];
		$i++;
		setcookie("i", $i, time() + 7200);
		$random = $_COOKIE["random"];
		$ugib = $_GET["ugib"];
		
		if ($ugib == $random) {
			echo "Uganili ste iskano število ".$random."!<br>Poskus številka ".$i.".";
			setcookie("uganjeno", "1", time()+7200);
		}
		
		if ($ugib > $random) {
			echo "Iskano število je manjše od ".$ugib."!<br>Poskus številka ".$i.".";
		}
		
		if ($ugib < $random) {
			echo "Iskano število je večje od ".$ugib."!<br>Poskus številka ".$i.".";
		}
	}
	
	if (isset($COOKIE["uganjeno"]) && $_COOKIE["uganjeno"] == 1) {
		echo "Si že ugalnil število, začni novo igro!";
	}
?>
