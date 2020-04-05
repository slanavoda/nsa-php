<?php
    chmod($_POST['brisi'], 0755);
    unlink($_POST['brisi']);
    header('Location: index.php');
?>