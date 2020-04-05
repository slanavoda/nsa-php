<a href="datoteke.php">Prikaži prenesene datoteke</a><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" accept=".txt" multiple required><br>
    <input type="checkbox" name="prepisi" value="1">Prepiši obstoječe datoteke</input><br>
    <input type="submit" value="Naloži!">
</form>