<?php
$servername = 'mysql:host=localhost;dbname=baseparrot';
$username = 'vincent';
$password = 'WzWep-KuG(-8OeE5';


try {
    $conn = new PDO('mysql:host=localhost;dbname=baseparrot', 'vincent', 'WzWep-KuG(-8OeE5');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit();
}
?>

