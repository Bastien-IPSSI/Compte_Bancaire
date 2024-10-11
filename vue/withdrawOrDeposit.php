<h2 class="text-center text-dark">Retirer ou Déposer</h2>

<form action="" id="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <select name="action" class="form-select" required>
        <option value="" disabled selected hidden>Veuillez sélectionner une action</option>
        <option value="deposit">Déposer</option>
        <option value="withdraw">Retirer</option>
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