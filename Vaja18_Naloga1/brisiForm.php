<form action="brisi.php" method="post">
    <select name="brisi">
        <?php
            foreach (glob('besedila/*.txt') as $datoteka) {
                $ime = strstr($datoteka, '/');
                $ime = ltrim($ime, '/');
                echo '<option value="'.$datoteka.'">'.$ime.'</option>';
            }
        ?>
    </select>
    <input type="submit" value="Izbriši">
</form>