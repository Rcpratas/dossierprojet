<?php
session_start();
include("../../../base/connexion.php");
include("../../../templates/header.php");
?>



<div class="container">

    <?php if (isset($_SESSION['message'])) : ?>
        <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <nav class="navbar navbar-light bg-dark">
        <h2>Liste annonces de voitures d'occasion</h2>
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
                    <th scope="col">Marque</th>
                    <th scope="col">Modele</th>
                    <th scope="col">Année</th>
                    <th scope="col">Kilometrage</th>                    
                    <th scope="col">Prix</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Supp.</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // fonction pour afficher annonces
                $query = "SELECT * FROM annonces";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <th scope="row"><?= $row['id']; ?></th>
                            <td><?= $row['marque']; ?></td>
                            <td><?= $row['modele']; ?></td>
                            <td><?= $row['annee']; ?></td>
                            <td><?= $row['kilometrage'].'km'; ?></td>
                            <td><?= $row['prix'].'€'; ?></td>
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
