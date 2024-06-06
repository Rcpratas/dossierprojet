<?php
session_start();
// connexion à la base de donnée
include("../../../base/connexion.php");
include("../../../templates/header.php");

// verifier que le button editer a bien été cliqué
if (isset($_POST['update'])) {
    // recuperer les données du formulaire
    $id = $_POST['id'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $kilometrage = $_POST['kilometrage'];
    $prix = $_POST['prix'];

    try {
        // requête pour mettre à jour les données
        $query = "UPDATE annonces SET marque=:marque, modele=:modele, annee=:annee, kilometrage=:kilometrage, prix=:prix WHERE id=:id limit 1";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':marque', $marque);
        $stmt->bindParam(':modele', $modele);
        $stmt->bindParam(':annee', $annee);
        $stmt->bindParam(':kilometrage', $kilometrage);
        $stmt->bindParam(':prix', $prix);
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
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $kilometrage = $_POST['kilometrage'];
    $prix = $_POST['prix'];

    try {
        $query = "INSERT INTO annonces (marque, modele, annee, kilometrage, prix) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $marque);
        $stmt->bindParam(2, $modele);
        $stmt->bindParam(3, $annee);
        $stmt->bindParam(4, $kilometrage);
        $stmt->bindParam(5, $prix);
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
