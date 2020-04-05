<?php
    foreach ($_FILES['file']['tmp_name'] as $k => $temp) {
        if (file_exists('besedila/'.$_FILES['file']['name'][$k]) && $_POST['prepisi'] == "1") {
            chmod('besedila/'.$_FILES['file']['name'][$k], 0755);
            unlink('besedila/'.$_FILES['file']['name'][$k]);
        } else if (file_exists('besedila/'.$_FILES['file']['name'][$k]) && !isset($_POST['prepisi'])) {
            continue;
        }
        move_uploaded_file($temp, "besedila/".$_FILES['file']['name'][$k]);
    }

    header('Location: index.php');
?>