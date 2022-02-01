<?php
?>

<form class="was-validated" novalidate>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">Sujet</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="Sujet" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Email</label>
            <input type="email" class="form-control" id="validationTooltip02" placeholder="Email" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="validationTextarea">Message</label>
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
        <div class="invalid-feedback">
            Please enter a message in the textarea.
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Submit form</button>
</form>