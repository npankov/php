<?php
include_once './includes/header.php';
?>

<form class="bg-light p-5" method="POST">
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

<?php
    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
    }
?>

<?php
include_once './includes/footer.php';
?>