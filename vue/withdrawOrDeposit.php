<div class="h-100 d-flex align-items-center justify-content-between">
    <div class="h-100 center" style="width: 49%;">
        <div class="card card-bg h-75 w-75">
            <form action="" id="form" method="post" enctype="multipart/form-data">
                <div class="card-header p-3">
                    <h2 class="text-center text-dark">Retirer ou Déposer</h2>
                </div>
                <div class="card-body">
                    <div class="form-group m-2 w-100 center">
                        <select name="action" id="selectWithdrawDeposit" class="form-select w-75" required>
                            <option value="" disabled selected hidden>Veuillez sélectionner une action</option>
                            <option value="deposit">Déposer</option>
                            <option value="withdraw">Retirer</option>
                        </select>
                    </div>
                    <div class="form-group m-2 w-100 center">
                        <div class="w-75">
                            <label class="mb-2" for="amount">Montant</label>
                            <input type="number" name="amount" class="form-control" required>
                        </div>
                    </div>
                    <div class="center">
                        <input type="submit" id="buttonWithdrawDeposit" class="btn btn-secondary mt-3" value="Valider">
                    </div>
                    <?php if ($formMessage[1] != ""): ?>
                        <div class="alert alert-<?= $formMessage[0] ? "success" : "danger" ?> mt-4">
                            <?= htmlspecialchars($formMessage[1]) ?>
                        </div>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
    <div class="bar"></div>
    <div class="h-100 d-flex align-items-center justify-content-center" style="width: 49%;">
        <div class="card card-bg h-50 w-50">
            <div class="card-header text-center h-25 center">
                Votre solde :
            </div>
            <div class="card-body center h-75">
                <h1 class="font-monospace">
                    <?= $accountInfo["solde"] ?> $
                </h1>
            </div>
        </div>
    </div>
</div>