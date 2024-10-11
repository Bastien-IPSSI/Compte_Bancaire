<h2 class="text-center text-dark">Inscription</h2>

<form action="" id="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="firstName">Prenom</label>
        <input type="text" name="firstName" class="form-control" required>
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
        <label for="accountType">Type de compte</label>
        <select name="accountType" class="form-select" required>
            <option value="Courant">Courant</option>
            <option value="Epargne">Epargne</option>
            <option value="Entreprise">Entreprise</option>
        </select>
    </div>
    <input type="submit" class="btn btn-success mt-3" value="Créer mon compte">
</form>