<?php

    /*fonction session_unset Détruit toutes les variables d'une session */

    /*fonction session_destroy Détruit une session */

    session_start();
    session_unset();
    session_destroy();

    header("Location: index.php");
    exit();