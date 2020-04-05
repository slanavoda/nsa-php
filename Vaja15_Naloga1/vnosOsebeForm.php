<form action="vnosOsebe.php" method="get">
	<input type="number" name="id" placeholder="ID" required><br>
	<input type="text" name="ime" placeholder="Ime" required><br>
	<input type="text" name="priimek" placeholder="Priimek" required><br>
	<input type="date" name="rojstvo" required><br>
	<?php
		echo '<select name="kraj" required>';
		$conn = mysqli_connect("localhost:3306", "root", "", "baza1") or die("Napaka!");
		$query = "select * from kraj order by imeKraja";
	
		$recordSet = mysqli_query($conn, $query) or die("Napaka!");
	
		while ($vrstica = mysqli_fetch_assoc($recordSet)) {
			echo '<option value="'.$vrstica["KID"].'">'.$vrstica["imeKraja"].'</option>';
		}
	
		mysqli_close($conn);
		echo '</select><br>';
	?>
	<input type="radio" name="spol" value="m" checked>M</input>
	<input type="radio" name="spol" value="z" checked>Ž</input><br>
	<input type="text" name="email" placeholder="Elektronska pošta" required><br>
	<input type="text" name="opis" placeholder="Opis"><br>
	<input type="submit" value="Vnesi!">
</form>