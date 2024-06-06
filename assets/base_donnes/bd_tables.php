<?php
$servername = "localhost";
$username = "vincent";
$password = "WzWep-KuG(-8OeE5";
$dbname = "baseparrot";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //  PDO erreur mode pour exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // sql pour créer table users
  $sql = "CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL
  )";
  $conn->exec($sql);
  echo "Table users bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


// sql pour créer table services
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //  PDO erreur mode pour exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE services (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      label VARCHAR(255) NOT NULL,
      description VARCHAR(255) NOT NULL
      )";
  $conn->exec($sql);
  echo "Table services bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// sql pour créer table horaires
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //  PDO erreur mode pour exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE horaires (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      jour VARCHAR(255) NOT NULL,
      am_ouvert TIME NOT NULL,
      am_ferme TIME NOT NULL,
      pm_ouvert TIME NOT NULL,
      pm_ferme TIME NOT NULL
      )";
  $conn->exec($sql);
  echo "Table horaires bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// sql pour créer table annonces
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //  PDO erreur mode pour exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE annonces (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    marque VARCHAR(255) NOT NULL,
    modele VARCHAR(255) NOT NULL,
    annee YEAR NOT NULL,
    kilometrage INT NOT NULL,
    prix DECIMAL(11) NOT NULL 
    )";
  $conn->exec($sql);
  echo "Table annonces bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


// insert quelques values de base
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // preparer le PDO erreur pour mode exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // insert values en users
  $sql = "INSERT INTO users (username, email, password) VALUES 
  ('Parrot', 'vincent@email.com', 'admin123')";
  // utiliser  exec() parce que on'a rien comme resultat
  $conn->exec($sql);
  echo "Nouveau registre bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // preparer le PDO erreur pour mode exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // insert values en services
  $sql = "INSERT INTO services (label, description) VALUES ('Mecanique', 'reparations')";

  // utiliser  exec() parce que on'a rien comme resultat
  $conn->exec($sql);
  echo "Nouveau registre bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // preparer le PDO erreur pour mode exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // insert values en horaires
  $sql = "INSERT INTO horaires (jour, am_ouvert, am_ferme, pm_ouvert, pm_ferme) VALUES ('lundi', '8:30', '12:30', '14:00', '18:30'),
 ('mardi', '8:30', '12:30', '14:00', '18:30'),
 ('mercredi', '8:30', '12:30', '14:00', '18:30'),
 ('jeudi', '8:30', '12:30', '14:00', '18:30'),
 ('vendredi', '8:30', '12:30', '14:00', '18:30'),
 ('samedi', '8:30', '12:30', '00:00', '00:00')";
  // utiliser  exec() parce que on'a rien comme resultat
  $conn->exec($sql);
  echo "Nouveau registre bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // preparer le PDO erreur pour mode exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // insert values en annonces
  $sql = "INSERT INTO annonces (marque, modele, annee, kilometrage, prix)
  VALUES ('Renault', 'Megane', '2015','120000', '5000')";

  // utiliser  exec() parce que on'a rien comme resultat
  $conn->exec($sql);
  echo "Nouveau registre bien crée";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


$conn = null;
