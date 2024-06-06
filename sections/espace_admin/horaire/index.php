<?php
session_start();
include('../../../base/connexion.php');
include("../../../templates/header.php");
?>
<link rel="stylesheet" href="../../../base/style.css">


<div class="container">

    <?php if (isset($_SESSION['message'])) : ?>
        <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <nav class="navbar navbar-light bg-light">
        <h2>Gestion d'horaires de fonctionnement</h2>
        <a class="navbar-brand" href="../index.php">
            <img src="../../../assets/images/admin_icon.png" width="30" height="30" class="d-inline-block align-top" alt="">Sortir</a>

    </nav>

    <div class="container p-2 mt-5">

        </table>

        <table class="table">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jour</th>
                    <th scope="col">Ouvre</th>
                    <th scope="col">Ferme</th>
                    <th scope="col">Ouvre</th>
                    <th scope="col">Ferme</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // fonction pour afficher horaires
                $query = "SELECT * FROM horaires";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <th scope="row"><?= $row['id']; ?></th>
                            <td><?= $row['jour']; ?></td>
                            <td><?= $row['am_ouvert']; ?></td>
                            <td><?= $row['am_ferme']; ?></td>
                            <td><?= $row['pm_ouvert']; ?></td>
                            <td><?= $row['pm_ferme']; ?></td>
                            <td><a href="modifier.php?id=<?= $row['id']; ?>" class="Btn-icon">
                                    <img src="../../../assets/images/edit_icon.png" height="30px"></a></td>
                        </tr>
                    <?php }
                } else {
                    ?>
                    <tr>
                        <td colsan="5">Rien trouvé</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>