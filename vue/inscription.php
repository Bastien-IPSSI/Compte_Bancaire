<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revobank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body class="center home-bg" style="height: 100vh;">
    <div class="card" style="width: 30%; height: 80%">
        <div class="card-header">
            <h2 class="text-center text-dark">Inscription</h2>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column h-100" action="" id="inscriptionForm" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstName">Prenom</label>
                    <input type="text" name="firstName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lastName">Nom</label>
                    <input type="text" name="lastName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Numéro de téléphone</label>
                    <input type="tel" name="phone" class="form-control"
                        pattern="^(\+33|0)[1-9](\d{2}){4}$"
                        required>
                </div>
                <div class="form-group">
                    <label for="pass">Mot de passe</label>
                    <input type="password" name="pass" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="solde">Solde</label>
                    <input type="number" name="solde" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="accountType">Type de compte</label>
                    <select name="accountType" class="form-select" required>
                        <option value="Courant">Courant</option>
                        <option value="Epargne">Epargne</option>
                        <option value="Entreprise">Entreprise</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Créer mon compte">
        </div>
        </form>
    </div>
    </div>
</body>

</html>