<?php
if (isset($_SESSION['formSent'])) {
    header('Location: results.php');
    exit();
} else {
    header('Location: settings.php');
    exit();
}
?>