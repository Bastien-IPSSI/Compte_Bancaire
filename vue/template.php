<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revobank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="d-flex flex-column justify-content-between" style="height: 100vh;">
    <header class="bg-warning p-4">
        <div>
            <h1 class="text-center text-dark">Revobank</h1>
            <div class="text-end align-top">
                <?php if(empty($_SESSION["user"])):?>
                    <a class="btn btn-success" href="?userAction=login">Connexion</a>
                    <a class="btn btn-success" href="?userAction=inscription">Inscription</a>
                <?php else: ?>
                <a class="btn btn-danger" href="?userAction=logout">Deconnexion</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-dark" href="">Consulter mon solde</a>
            <a class="btn btn-dark" href="">Retirer ou Déposer</a>
            <a class="btn btn-dark" href="">Faire un virement</a>
        </div>
    </header>
    <main class="container-fluid h-100" style="background-color: silver;">
        <?= $content ?? ''; ?>
    </main>
    <footer class="bg-warning p-3 text-center">
        &copy; IPSSI - 2024
    </footer>
</body>
</html>