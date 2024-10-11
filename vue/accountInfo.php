<div class="card h-100 w-100 m-0">
    <div class="card-header text-center">
        <h2>Informations du Compte Bancaire</h2>
    </div>
    <div class="card-body">
        <h5 class="card-title">Détails du Client</h5>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nom:</strong>
                <?= unserialize($_SESSION["user"])["nom"] . " " . unserialize($_SESSION["user"])["prenom"]?>
            </li>
            <li class="list-group-item"><strong>Numéro de Compte:</strong> <?= $data["accountInfo"]["numeroCompte"] ?></li>
            <li class="list-group-item"><strong>Solde:</strong> <?= $data["accountInfo"]["solde"] ?> €</li>
            <li class="list-group-item"><strong>Type de Compte:</strong> <?= $data["accountInfo"]["typeDeCompte"] ?></li>
        </ul>
    </div>
</div>