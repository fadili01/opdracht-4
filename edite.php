<?php
include 'db.php';

try {
    $db = new Database();
    $autoID = $_GET['id'];
    echo "Gebruiker met ID verwijderen: $autoID<br>";
    $db->deleteUser($autoID);
} catch (Exception $e) {
    echo "Fout: " . $e->getMessage();
}


?>