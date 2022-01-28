<?php
include_once './includes/header.php';

$loginErrors = [];
$defaultPassword = 'toto';
?>

<div>
    <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $password = $_POST['password'];

        if (empty($password)) {
            $loginErrors[] = 'Mot de passe est vide!';
        } elseif ($password != $defaultPassword) {
            $loginErrors[] = 'Motte de passe est incorrect!';
        }

        if (empty($loginErrors)) {
            $_SESSION['email'] = $_POST['email'];
            header('Location: index.php');
            ?>
            <div class="alert alert-success" role="alert">
                Vous etes connecté!
            </div>
            <?php
        }
    }

    foreach ($loginErrors as $error) {
        ?>
        <div class="alert alert-danger" role="alert">
            <?= $error; ?>
        </div>
        <?php
    }
    ?>

    <form class="bg-light p-5" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php
include_once './includes/footer.php';
?>