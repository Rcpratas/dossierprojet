<?php
session_start();
include('../../base/connexion.php');

include("../../templates/header.php");
?>
<link rel="stylesheet" href="../../base/style.css">

<body>
    <header>

    </header>


    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Dashboard</span> 
        <h5 class="bg-warning p-3 text-white d-flex justify-content-center border-rounded">ADMIN :<sapn>Vincet Parrot</sapn></h5>        
  </div> 
  <div class="container d-flex justify-content-center">
  <div class="card ">
  <div class="container-block m-5 text-white d-block justify-content-center">
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
            <a name="logout" id="logout" class="btn btn-primary btn-bg w-50 justify-content-center m-5" href="../../base/logout.php" role="button">Logout</a>
        </div></div></div>
</nav>