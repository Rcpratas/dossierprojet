<?php

include('connexion.php');
include("../templates/header.php");


?>



<div class="container">
    <nav class="navbar navbar-light bg-light">
        <h2>Liste annonces de voitures d'occasion</h2>
        <button class="btn btn-primary btn-sm">
            <a class="navbar-brand" href="../index.php">Sortir</a>
        </button>


    </nav>
    <!----------   Filtre de voitures -------------->


    <div class="container p-2 mt-5">
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Marque</th>
                    <th scope="col">Modele</th>
                    <th scope="col">Année</th>
                    <th scope="col">Kilometrage</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Photo</th>
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
                            <td><?= $row['marque']; ?></td>
                            <td><?= $row['modele']; ?></td>
                            <td><?= $row['annee']; ?></td>
                            <td><?= $row['kilometrage'] . 'Km'; ?></td>
                            <td><?= $row['prix'] . '€'; ?></td>
                            <td><img src="../assets/images/berline.jpg" alt="berline" width="50px" height="50px"></td>
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

