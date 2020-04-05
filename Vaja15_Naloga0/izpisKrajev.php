<?php
	$conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka!");
	$query = "select * from kraj order by imeKraja";
	
	$recordSet = mysqli_query($conn, $query) or die("Napaka!");
	
	while ($vrstica = mysqli_fetch_assoc($recordSet)) {
		echo $vrstica["KID"].' '.$vrstica["imeKraja"].'<br>';
	}
	
	mysqli_close($conn);
?>