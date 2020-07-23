<?php
$srvsid = $_GET['ID'];
session_start();
unset($_SESSION['Adm']);
unset($_SESSION['Sess']);
unset($_SESSION['IDS']);
session_destroy();
header("Location: 0708150301.php?ID=$srvsid");
?>