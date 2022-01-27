<?php
include './includes/variables.php';
include './includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">Lucky Bonnet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="list.php">List de bonnets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>

                <?php
                if (isset($_POST['email'])) {
                    ?>
                    <li>
                        <a class="nav-link disabled" href="#"><?= $_POST['email']; ?></a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a class="nav-link disabled" href="#">User non connecté</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4 d-flex justify-content-center">

