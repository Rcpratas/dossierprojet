<?php
session_start();
// connexion à la base de donnée
include("../../../base/connexion.php");
include("../../../templates/header.php");

// verifier que le button editer a bien été cliqué
if (isset($_POST['update'])) {
    // recuperer les données du formulaire
    $id = $_POST['id'];
    $label = $_POST['label'];
    $description = $_POST['description'];

    try {
        // requête pour mettre à jour les données
        $query = "UPDATE services SET label=:label, description=:description WHERE id=:id limit 1";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':label', $label);
        $stmt->bindParam(':description', $description);
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


// verifier que le button ajouter a bien été cliqué
if (isset($_POST['add'])) {
    // recuperer les données du formulaire
    $label = $_POST['label'];
    $description = $_POST['description'];

    try {
        $query = "INSERT INTO services (label, description) VALUES (?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $label);
        $stmt->bindParam(2, $description);
        $query_execute = $stmt->execute();

        if ($query_execute) {
            $_SESSION['message'] = "Ajouté";
            header('Location: index.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Erreur";
            header('Location: index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}