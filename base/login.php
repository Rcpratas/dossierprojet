<?php
session_start();

if (isset($_POST['login'])) {

  // Connect to the database 
  $conn = new mysqli("localhost", "vincent", "WzWep-KuG(-8OeE5", "baseparrot");

  // Check for errors 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and bind the SQL statement 
  $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);

  // Get the form data 
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Execute the SQL statement 
  $stmt->execute();
  $stmt->store_result();

  // Check if the user exists 
  if ($stmt->num_rows > 0) {

    // Bind the result to variables 
    $stmt->bind_result($id, $hashed_password);

    // Fetch the result 
    $stmt->fetch();

    // Verify the password 
    if (password_verify($password, $hashed_password)) {

      // Set the session variables 
      $_SESSION['loggedin'] = true;
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;

      // Redirect to the user's dashboard 
      header("Location: ../sections/espace_admin/index.php");
      exit;
    }
  }
  // Close the connection 
  $stmt->close();
  $conn->close();
}



include("../templates/header.php"); ?>
<link rel="stylesheet" href="style.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">

  <div class="container-fluid">
    <a class="navbar-brand" id="logo" href="../index.php"><img src="../assets/images/logo.jpg" width="80" heigth="80"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Retour à l'accueil</a>
        </li>
    </div>
  </div>
</nav>

<!------------ formulaire de login ------------------>




<!-- Display the login form -->


<div class="login">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card bg-light p-5 shadow-mt-5">
          <div class=" d-flex justify-content-center">
            <h2>Login</h2>
          </div>
          <hr>
          <form action="login.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username :</label>
              <input type="username" name="username" autocomplete="off" class="form-control" id="username" aria-describedby="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password :</label>
              <input type="password" name="password" autocomplete="new-password" class="form-control" id="password" required>
            </div>
            <input name="login" type="submit" value="login" class="btn btn-primary w-100" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("../templates/footer.php"); ?>