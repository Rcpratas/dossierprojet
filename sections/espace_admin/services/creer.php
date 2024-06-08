<?php session_start();
include("../../../base/connexion.php");
include("../../../templates/header.php"); ?>



<div class="container">
    <nav class="navbar navbar-light bg-light">
        <h2>Ajouter nouveau service</h2>
        <a class="navbar-brand" href="index.php">
            <img src="../../../assets/images/admin_icon.png" width="30" height="30" class="d-inline-block align-top" alt="">Sortir</a>
    </nav>
    <div class="dashboard d-flex justify-content-between">
        <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
            <form action="code.php" method="POST">
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="label" id="label" placeholder="Service:">
                </div>
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description:">
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" name="add" class="btn btn-primary btn-sm " value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>