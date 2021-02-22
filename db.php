<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=internethiopia.com', 'admin@root', 'admin@123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;

?>