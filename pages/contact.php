<form class="was-validated" novalidate method="post">
    <?php
    if (!empty(isset($_POST['email'])) && !empty(isset($_POST['sujet'])) && !empty(isset($_POST['message']))) {
        ?>

        <div class="alert alert-success mb-3" role="alert">
            Message a envoyé!
        </div>
        <?php
    }
    ?>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">Sujet</label>
            <input type="text" name="sujet" class="form-control" id="validationTooltip01" placeholder="Sujet" required>
            <div class="valid-feedback">
                Sujet est Ok.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Email</label>
            <input type="email" name="email" class="form-control" id="validationTooltip02" placeholder="Email" required>
            <div class="valid-feedback">
                Email est Ok.
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="validationTextarea">Message</label>
        <textarea name="message" class="form-control is-invalid" id="validationTextarea"
                  placeholder="Required example textarea" required></textarea>
        <div class="valid-feedback">
            Message est Ok.
        </div>
    </div>

    <button class="btn btn-primary mb-3" type="submit">Submit form</button>
</form>
