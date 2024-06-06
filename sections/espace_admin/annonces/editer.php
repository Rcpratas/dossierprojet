<?php
// connexion à la base de données
include("../../../base/connexion.php");
include("../../../templates/header.php");



if (isset($_GET['id'])) {

    $ann_id = $_GET['id'];
    $query = "SELECT * FROM annonces WHERE id = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $ann_id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="../../../base/style.css">

    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <h2>Modifier annonce</h2>
            <a class="navbar-brand" href="index.php">
                <img src="../../../assets/images/admin_icon.png" width="30" height="30" class="d-inline-block align-top" alt="">Sortir</a>
        </nav>
        <div class="dashboard d-flex justify-content-between">
            <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
                <form action="code.php" method="POST">
                    <input type="hidden" name="id" value="<?= $result['id']; ?>">

                    <div class="form-field mb-4">
                        <input type="text" class="form-control" name="marque" id="marque" value="<?= $result['marque']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="text" class="form-control" name="modele" id="modele" value="<?= $result['modele']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="date" class="form-control" name="annee" id="annee" value="<?= $result['annee']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="number" class="form-control" name="kilometrage" id="kilometrage" value="<?= $result['kilometrage']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="number" class="form-control" name="prix" id="prix" value="<?= $result['prix']; ?>">
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" name="update" class="btn btn-primary btn-sm " value="Modifier">
                    </div>
                </form>

            <?php
        } else {
            echo "<h5>ID pas trouvé</h5>";
        }
            ?>
            </div>
        </div>
    </div>