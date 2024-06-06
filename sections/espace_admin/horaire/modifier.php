<?php
// connexion à la base de données
include("../../../base/connexion.php");
include("../../../templates/header.php");



if (isset($_GET['id'])) {

    $ann_id = $_GET['id'];
    $query = "SELECT * FROM horaires WHERE id = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $ann_id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="../../../base/style.css">


    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <h2>Modifier horaires</h2>
            <a class="navbar-brand" href="index.php">
                <img src="../../../assets/images/admin_icon.png" width="30" height="30" class="d-inline-block align-top" alt="">Sortir</a>
        </nav>
        <div class="dashboard d-flex justify-content-between">
            <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $result['id']; ?>">

                    <div class="form-field mb-4">
                        <input type="text" class="form-control" name="jour" id="jour" value="<?= $result['jour']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="time" class="form-control" name="am_ouvert" id="am_ouvert" min="00:00" max="12:30" value="<?= $result['am_ouvert']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="time" class="form-control" name="am_ferme" id="am_ferme" min="00:00" max="12:30" value="<?= $result['am_ferme']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="time" class="form-control" name="pm_ouvert" id="pm_ouvert" min="14:00" max="00:00" value="<?= $result['pm_ouvert']; ?>">
                    </div>
                    <div class="form-field mb-4">
                        <input type="time" class="form-control" name="pm_ferme" id="pm_ferme" min="14:00" max="00:00" value="<?= $result['pm_ferme']; ?>">
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