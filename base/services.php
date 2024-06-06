<?php
session_start();
include('connexion.php');
include("../templates/header.php");

?>
<link rel="stylesheet" href="style.css">

<div class="container">

    <nav class="navbar navbar-light bg-light">

        <h2>Liste de services</h2>
        <button class="btn btn-primary btn-sm">
            <a class="navbar-brand" href="../public/index.php">Sortir</a>
        </button>
    </nav>

    <div class="container p-2 mt-5">
        <br>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Service</th>
                    <th scope="col">Description</th>
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
                            <td><?= $row['label']; ?></td>
                            <td><?= $row['description']; ?></td>

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