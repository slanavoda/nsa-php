<form action="izpisDatoteke.php" method="post">
    <select name="izpis" required>
        <?php
            foreach (glob('besedila/*.txt') as $datoteka) {
                $ime = strstr($datoteka, '/');
                $ime = ltrim($ime, '/');
                echo '<option value="'.$datoteka.'">'.$ime.'</option>';
            }
        ?>
    </select><br>
    <select name="stil">
        <option value="1">Osnovna</option>
        <option value="2">Simple</option>
        <option value="3">Fancy</option>
    </select><br>
    <input type="submit" value="Izpiši!">
</form>