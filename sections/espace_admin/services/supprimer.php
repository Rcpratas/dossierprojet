<?php
session_start();
// connexion a la base de données

include_once "../../../base/connexion.php";
include("../../../templates/header.php");
// recuperer l'id dans le lien 
$id = $_GET['id'];
// requete pour supprimer
function deleteServiceById(PDO $conn, int $id)
{
    $sql = 'DELETE FROM services WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// execution de la requete
deleteServiceById($conn, $id);
// redirection ver la page
header("Location:index.php");
