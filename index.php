<?php

$user = 'root';
$pass = '';
try {
    $db = new PDO('mysql:host=automobile.webstart.local;dbname=automobile', $user, $pass);
    foreach ($db->query('SELECT * FROM product') as $row) {
        print_r($row);
    }
} catch (PDOException $e) {
    print "erreur :" . $e->getMessage() . "<br/>";
    die;
}
