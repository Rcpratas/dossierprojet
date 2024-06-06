<?php
session_start();
// connexion à la base de donnée
include("../../../base/connexion.php");
include("../../../templates/header.php");

// verifier que le button editer a bien été cliqué
if (isset($_POST['update'])) {
    // recuperer les données du formulaire
    $id = $_POST['id'];
    $jour = $_POST['jour'];
    $am_ouvert = $_POST['am_ouvert'];
    $am_ferme = $_POST['am_ferme'];
    $pm_ouvert = $_POST['pm_ouvert'];
    $pm_ferme = $_POST['pm_ferme'];

    try {
        // requête pour mettre à jour les données
        $query = "UPDATE horaires SET jour=:jour, am_ouvert=:am_ouvert, am_ferme=:am_ferme, pm_ouvert=:pm_ouvert, pm_ferme=:pm_ferme WHERE id=:id limit 1";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':jour', $jour);
        $stmt->bindParam(':am_ouvert', $am_ouvert);
        $stmt->bindParam(':am_ferme', $am_ferme);
        $stmt->bindParam(':pm_ouvert', $pm_ouvert);
        $stmt->bindParam(':pm_ferme', $pm_ferme);
        $stmt->bindParam(':id', $id);
        $query_execute = $stmt->execute();

        if ($query_execute) {
            $_SESSION['message'] = "Modifié";
            header('Location: index.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Erreur";
            header('Location: index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}



