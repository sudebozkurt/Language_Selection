<?php
    session_start();

    $gelenDil = $_GET["LangChoice"];

    $_SESSION["SiteDili"] = $gelenDil;

    header("Location:index.php");
    exit();
?>