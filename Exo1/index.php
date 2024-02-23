<?php
if ($_GET['action'] === 'logout') {
    $_SESSION = array();
    session_destroy();
    exit(header("Location: accueil.php"));
    }
exit;
