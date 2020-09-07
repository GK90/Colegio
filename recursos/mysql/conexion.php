<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'colegiodb';

try {
    $conn = mysqli_connect($server, $username, $password);
    if (!$conn) {
        exit('Error al conectar(' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf-8');
    mysqli_select_db($conn, $database);
} catch (PDOException $e) {
    die('Conneccion fallida: ' . $e->getMessage());
}
?>