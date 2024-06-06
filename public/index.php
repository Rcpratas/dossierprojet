<?php
include('../base/connexion.php');
include("../templates/header.php"); ?>
<link rel="stylesheet" href="../base/style.css">



<!-- ma navbar -->

<body>
    <header>
        <nav id="logo" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand"  href="index.php"><img src="../assets/images/logo.jpg" width="80" heigth="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../base/services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../base/galerie.php">Voitures en vente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sections/contact/contacter.php">Contacter</a>
                        </li>
                    </ul>
                    <a name="login" id="login" class="btn btn-primary btn-sm" href="../base/login.php" role="button">Espace admin</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-2">
            <div class="row align-items-md-stretch">
                <div class="col-md-6 p-5">
                    <div class="h-100 p-5 text-white bg-primary border rounded-3" style="background-image: url(../assets/images/voiture1.jpg);background-size:cover; filter:opacity(0.7);">
                        <h2>Faites un tour sur notre page de voitures en vente</h2>
                        <p>
                            Nous avons plein de voitures d'occasion en vente !
                            <br> Profitez !
                        </p>
                        <a class="btn btn-primary" href="../base/galerie.php" role="button">Aller voir</a>
                    </div>
                </div>
                <div id="horaire" class="col-md-6 p-5">
                    <div class="h-100 p-5 text-bg-warning border rounded-3">
                        <h2>Nos horaires</h2>
                        <table class="table-transparent text-black w-100 p-6 ">
                            <thead>
                                <tr>
                                    <th scope="col">Jour</th>
                                    <th scope="col">Ouvre</th>
                                    <th scope="col">Ferme</th>
                                    <th scope="col">Ouvre</th>
                                    <th scope="col">Ferme</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
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
                                            <td><?= $row['jour']; ?></td>
                                            <td><?= $row['am_ouvert']; ?></td>
                                            <td><?= $row['am_ferme']; ?></td>
                                            <td><?= $row['pm_ouvert']; ?></td>
                                            <td><?= $row['pm_ferme']; ?></td>
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
        </div>
        <div style="background-image: url(../assets/images/garage.jpg);background-size:cover;">
            <div class="container w-50 p-3 top-5">
                <div class="d-flex justify-content-center">
                    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="../assets/images/carrosserie.jpg" class="w-100 d-block" alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Carrosserie</h3>
                                    <p>Nos services de carrosserie</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/mecanique.jpg" class="w-100 d-block" alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Mecanique</h3>
                                    <p>Nos services de mecanique</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/manutention.jpg" class="w-100 d-block" alt="Third slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Manurention</h3>
                                    <p>Nos services de manurention</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <h2>Nos clients temoignent</h2>
        <br>

        <div class="container text-center">
            <div class="row g-4">

                <div class="col-4">
                    <div class="p-3">
                        <h3>John Wick</h3>
                        <p>Trés bon service</p>
                        <h2>*****</h2>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3">
                        <h3>John Wick</h3>
                        <p>Trés bon service</p>
                        <h2>*****</h2>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3">
                        <h3>John Wick</h3>
                        <p>Trés bon service</p>
                        <h2>*****</h2>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button id="my-button" class="btn btn-outline-warning me-md-2" type="button">voir plus</button>
                        <script>
                            const button = document.getElementById('my-button');
                            button.addEventListener('click', () => {
                                document.getElementById('my-carousel').reload();
                            });
                        </script>
                    </div>
                </div>

                <!--------------------- Contacter garage ---------------------------->

                <h2 id="contact">Vous avez besoin d'informations ?</h2>

                <div class="container">
                    <h3><a href="../sections/contact/contacter.php">Contactez-nous</a></h3>
                </div>
                <br>

    </main>

    <footer>
        <?php include("../templates/footer.php"); ?>