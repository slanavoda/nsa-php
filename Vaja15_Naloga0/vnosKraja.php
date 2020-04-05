<?php
	$conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka1!");
	$query = "insert into kraj values (".$_GET["KID"].", '".$_GET["imeKraja"]."');";
	
	mysqli_query($conn, $query) or die("Napaka!");
	mysqli_close($conn);
    header('Location: vnosKrajaForm.php')
?>