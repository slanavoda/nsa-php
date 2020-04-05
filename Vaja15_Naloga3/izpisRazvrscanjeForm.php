<form action="izpisRazvrscanje.php" method="post">
    <fieldset style="display: inline-block;">
    <legend>Razvrsti Po:</legend>
        <input type="checkbox" name="sort[]" value="KID">Krajih</input><br>
        <input type="checkbox" name="sort[]" value="priimek">Priimkih</input><br>
        <input type="checkbox" name="sort[]" value="rojstvo">Starosti</input><br>
        <input type="radio" name="s" value="asc" checked>Naraščajoče</input>
        <input type="radio" name="s" value="desc">Padajoče</input><br>
        <input type="submit" value="Izpiši!">
    </fieldset>
</form>