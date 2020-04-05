<?php
    if (!isset($_GET['KID'])) {
        header('Location: vnosKrajaForm.php');
    }
	$conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka pri povezovanju s strežnikom!");
	$query = "insert into kraj values (".$_GET["KID"].", '".$_GET["imeKraja"]."');";
	
	mysqli_query($conn, $query) or die("Napaka v poizvedbi!");
	mysqli_close($conn);
    header('Location: vnosKrajaForm.php')
?>