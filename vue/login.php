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

<body class="center home-bg" style="height: 100vh;">
    <div class="card h-50" style="width: 30%;">
        <div class="card-header">
            <h2 class="text-center text-dark">Connexion</h2>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column h-100" action="" id="form" method="post" enctype="multipart/form-data">
                <div class="d-flex flex-column justify-content-center">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Mot de passe</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mt-4">
                    <a class="text-decoration-none" href="?user=inscription">S'inscrire</a>
                    <input type="submit" class="btn w-50 btn-primary mt-3" value="Connexion">
                </div>
            </form>
        </div>
    </div>
</body>

</html>