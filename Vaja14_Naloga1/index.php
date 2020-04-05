<?php
    if (isset($_COOKIE['ime']) && isset($_COOKIE['casObiska'])) {
        header('Location: pozdrav.php');
    }
?>
<script>
    if (!navigator.cookieEnabled) window.location.replace("cookie.php");
</script>
<form action="poslji.php" method="get" >
    <fieldset style="display:inline-block;">
        <legend>Vaši Podatki</legend>
        <input type="text" placeholder="Ime" name="ime" required><br>
        <input type="text" placeholder="Priimek" name="priimek" required><br>
        Program:
        <input type="radio" name="program" value="gimnazija" checked>Gimnazija</input>
        <input type="radio" name="program" value="strokovna">Strokovna Šola</input>
        <input type="radio" name="program" value="drugo">Drugo</input><br>
        Tuji jezik(i):
        <input type="checkbox" name="jeziki[]" value="anglescina">Angleščina</input>
        <input type="checkbox" name="jeziki[]" value="nemscina">Nemščina</input>
        <input type="checkbox" name="jeziki[]" value="francoscina">Francoščina</input>
        <input type="checkbox" name="jeziki[]" value="drugo">Drugo</input><br>
        Šport(i):
        <input type="checkbox" name="sport[]" value="atletika">Atletika</input>
        <input type="checkbox" name="sport[]" value="smucanje">Smučanje</input>
        <input type="checkbox" name="sport[]" value="plavanje">Plavanje</input>
        <input type="checkbox" name="sport[]" value="drugo">Drugo</input><br>
        <select name="glasba[]" multiple>
            <option value="klasicna">Klasična</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="jazz">Jazz</option>
            <option value="rap">Rap</option>
            <option value="metal">Metal</option>
        </select><br>
        <input type="submit" value="Pošlji!">
    </fieldset>
</form>