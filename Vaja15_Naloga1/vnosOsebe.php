<?php
    if (!isset($_GET['ime'])) {
        header('Location: vnosOsebeForm.php');
    }
	$conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka1!");
	$query = "insert into oseba values (".$_GET["id"].", '".$_GET["ime"]."', '".$_GET["priimek"]."', '".$_GET["rojstvo"]."', '".$_GET["kraj"]."', '".$_GET["spol"]."', '".$_GET["email"]."', '".$_GET["opis"]."');";
	
	mysqli_query($conn, $query) or die("Napaka!");
	
	if (mysqli_affected_rows($conn) > 0) {
		echo "Zapis je bil uspešno dodan!";
	} else {
		echo "Napaka pri dodajanju zapisa!";
	}
	
	mysqli_close($conn);
?>