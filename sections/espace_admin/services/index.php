<?php
session_start();
include('../../../base/connexion.php');
include("../../../templates/header.php");

?>


<div class="container">

    <nav class="navbar navbar-light bg-light">
        <h2>Liste de services</h2>
        <a class="navbar-brand" href="../index.php">
            <img src="../../../assets/images/admin_icon.png" width="30" height="30" class="d-inline-block align-top" alt="">Sortir</a>
    </nav>

    <div class="container p-2 mt-5">

        <button type="button" class="btn"><a href="creer.php" class="Btn-icon">
                <img src="../../../assets/images/add_icon.png" height="30px">Ajouter</a>
        </button>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Service</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Supp.</th>

                </tr>
            </thead>
            <tbody>

                <?php
                // fonction pour afficher services
                $query = "SELECT * FROM services";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <th scope="row"><?= $row['id']; ?></th>
                            <td><?= $row['label']; ?></td>
                            <td><?= $row['description']; ?></td>
                            <td><a href="editer.php?id=<?= $row['id']; ?>" class="Btn-icon">
                                    <img src="../../../assets/images/edit_icon.png" height="30px"></a></td>
                            <td><a href="supprimer.php?id=<?= $row['id']; ?>" class="Btn-icon">
                                    <img src="../../../assets/images/del_icon.png" height="30px"></a></td>

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