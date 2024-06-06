<?php 
include ('../../templates/header.php');
?>
<link rel="stylesheet" href="../../base/style.css">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="../../public/index.php"><img src="../../assets/images/logo.jpg" width="80" heigth="80"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../public/index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../base/services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../base/galerie.php">Voitures en vente</a>
        </li>
      </ul>
      <a name="login" id="login" class="btn btn-primary btn-sm"
       href="../../base/login.php" role="button">Espace admin</a>

    </div>
  </div>
</nav>

<section class="contact">
  
  <div class="container w-50 p-3 border border_dark mt-5">
  <form action="" method="post">
    <div class="form-goup"> 
      <div class="mb-3">
        <input type="text" name="name" id="name" class="form-control" placeholder="Prenom :" aria-describedby="Votre prenom" required />
      </div>
      <div class="mb-3">
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Nom :" aria-describedby="Votre nom" required />
      </div>
      <div class="mb-3">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email :" aria-describedby="Votre email" required />
      </div>
      <div class="mb-3">
        <input type="phone" name="telephone" id="telephone" class="form-control" placeholder="Telephone :" aria-describedby="Votre telephone" required />
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="rendezvous" id="rendezvous" />
        <label class="form-check-label" for="">Prendre rendez-vouz</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="question" id="question" />
        <label class="form-check-label" for="">Une question</label>
      </div>

      <div class="mb-3">
        <textarea class="form-control" name="message" id="message" rows="3" placeholder="...dites nous :"></textarea>
      </div>
      <div class="d-flex justify-content-center">
        <input type="submit" value="Envoyer" class="btn btn-sm btn-primary">
      </div>
    </div>
  </div></form>
</section>

