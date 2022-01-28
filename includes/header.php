<?php
session_start();
include './includes/variables.php';
include './includes/functions.php';
if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">Lucky Bonnet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="list.php">Liste de bonnets</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['email'])) {
                        ?>
                        <a class="nav-link disabled" href="#"><?= $_SESSION['email']; ?></a>
                        <?php
                    } else {
                        ?>
                        <a class="nav-link" aria-current="page" href="login.php">Connexion</a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4 d-flex justify-content-center">

