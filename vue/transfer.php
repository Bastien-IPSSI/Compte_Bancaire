<h2 class="text-center text-dark">Virement</h2>

<form action="" id="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <select name="accounts" class="form-select" required>
        <option value="" disabled selected hidden>Veuillez sélectionner un destinataire</option>
        <?php foreach($accounts as $account): ?>
            <option value="<?= $account["compteId"] ?>"><?= $account["nom"] . " " . $account["prenom"] . " => " . $account["numeroCompte"] ?></option>
        <?php endforeach;?>
    </select>
    </div>
    <div class="form-group">
        <label for="amount">Montant</label>
        <input type="number" name="amount" class="form-control" required>
    </div>
    <input type="submit" class="btn btn-success mt-3" value="Valider">
</form>
<?php if ($formMessage[1] != ""): ?>
        <div class="alert alert-<?= $formMessage[0] ? "success" : "danger" ?> mt-4">
            <?= htmlspecialchars($formMessage[1]) ?>
        </div>
<?php endif; ?>
