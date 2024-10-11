
const params = new URLSearchParams(window.location.search);
if (params.get('user') === 'inscription') {
    document.querySelector('#inscriptionForm').addEventListener("submit", function(e){
        const solde = parseFloat(document.querySelector('input[name="solde"]').value);
        const accountType = document.querySelector('select[name="accountType"]').value
        const password = document.querySelector('input[name="pass"]').value;

        let errorMessage = '';

        if (isNaN(solde) || solde < 10 || solde > 2000) {
            errorMessage += 'Le solde doit être compris entre 10 et 2000.\n';
        }

        const validAccountTypes = ["Courant", "Epargne", "Entreprise"];
        if (!validAccountTypes.includes(accountType)) {
            errorMessage += 'Le type de compte doit être "Courant", "Epargne" ou "Entreprise".\n';
        }

        if (/\s/.test(password)) {
            errorMessage += 'Le mot de passe ne doit pas contenir d\'espaces.\n';
        }

        if (errorMessage) {
            e.preventDefault();
            alert(errorMessage);
    }})
}