<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revobank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="d-flex flex-column justify-content-between" style="height: 100vh;">
    <header class="home-bg p-3">
        <div class="h-50 d-flex justify-content-center">
            <a href="./" style="text-decoration: none;">
                <h1 class="text-center text-dark">Revobank</h1>
            </a>
        </div>
        <div class="text-end align-top">
            <?php if(!empty($_SESSION["user"])):?>
            <a class="btn-log" href="?user=logout">
                <i class="fa-solid fa-right-from-bracket fa-2x"></i>
            </a>
            <?php endif; ?>
        </div>
        <?php if(!empty($_SESSION["user"])):?>
            <div class="text-center h-50 mt-2">
                <a class="btn btn-bg text-dark" href="?account=consult">Consulter mon solde</a>
                <a class="btn btn-bg" href="?account=withdrawOrDeposit">Retirer ou Déposer</a>
                <a class="btn btn-bg" href="?account=transfer">Faire un virement</a>
            </div>
            <?php endif ?>
        </header>
        <main class="container-fluid main-bg h-100 p-0">
            <?= $content ?? ''; ?>
        </main>
        <footer class="home-bg p-3 text-center text-dark">
            &copy; IPSSI - 2024
        </footer>
        <script src="public/js/inscriptionValidation.js"></script>
</body>
</html>