<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=dofustats_users','root','');

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
