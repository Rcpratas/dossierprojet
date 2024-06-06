<?php
session_start();
include('../../base/connexion.php');

include("../../templates/header.php");
?>
<link rel="stylesheet" href="../../base/style.css">


<body>
    <header>

    </header>


<div class="fond"><img src="../../assets/images/garage.jpg" alt="garage"></div>
    <div class="sidebar bg-dark w-20 h-100 d-inline-block position-absolute">
        <h1 class="bg-danger p-4 text-black text-decoration-none">Dashboard</h1>
        <h5 class="bg-warning p-3 text-white d-flex justify-content-center border-rounded">ADMIN :<sapn>Vincet Parrot</sapn>
        </h5>
        <div class="container-block m-5 text-white">
            <ul class="navbar-nav p-5 m-2">
                <li class="nav-item p-3">
                    <a class="nav-link" href="services/index.php">Services</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link" href="horaire/index.php">Horaires</a>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link" href="annonces/index.php">Annonces</a>
                </li>
            </ul>
            <a name="logout" id="logout" class="btn btn-primary btn-lg justify-content-space-evenely m-5" href="../../base/logout.php" role="button">Logout</a>
        </div>
    </div>

    </div>