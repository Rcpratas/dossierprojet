<?php  
session_start() ; 
// connexion a la base de données
include('../../../base/connexion.php');
include("../../../templates/header.php");


// recuperer l'id dans le lien 
$id = $_GET['id'];
// requete pour supprimer
function deleteAnnonceById(PDO $conn, int $id) {
    $sql = 'DELETE FROM annonces WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// execution de la requete
deleteAnnonceById($conn,$id);
// redirection ver la page
header("Location:index.php");

?>