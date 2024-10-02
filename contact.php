<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agents - The KEY SECURITY</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>



    
    form {
    display: flex;
    flex-direction: column;
    max-width: 400px; /* Largeur maximale du formulaire */
    margin: 20px auto; /* Centre le formulaire */
}
h2{
    color: green;
    margin-top: -165px;

}

label {
    margin-bottom: 5px; /* Espacement entre le label et le champ */
    font-weight: bold; /* Met le texte en gras */
}

input {
    margin-bottom: 15px; /* Espacement entre les champs */
    padding: 10px; /* Espacement intérieur */
    border: 1px solid #ccc; /* Bordure du champ */
    border-radius: 5px; /* Arrondi des coins */
}

button {
    background-color: #e74c3c; /* Couleur de fond du bouton */
    color: white; /* Couleur du texte */
    padding: 10px; /* Espacement intérieur */
    border: none; /* Supprime la bordure */
    border-radius: 5px; /* Arrondi des coins */
    cursor: pointer; /* Change le curseur au survol */
    transition: background-color 0.3s; /* Animation lors du survol */
    margin-left: 70px;
    font-size: 19px;
    
}

button:hover {
    background-color: #c0392b; /* Couleur de fond au survol */
}
h1{
    text-align: center;
    margin-top: 35px;
}
.parag{
    word-spacing: 3px;
    margin-top: 60px;
    /*margin-left: 85px;*/
    text-align: center;
}
.tot{

    margin-left: 30px;
    margin-top: 205px;
}
footer{
        margin-top: -0.105px;


}

</style>
<body>
    <header>
        <div class="tit"><h1>The KEY SECURITY</h1></div>
        <div class="lnk">
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="propos.php">À propos de</a></li>
                    <li><a href="service.php">Nos services</a></li>
                    <li><a href="publication.php">Publications</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>The KEY SECURITY</h1>
    
    <div class="parag">
                <p>
                Nous sommes là pour vous aider ! Dans notre entreprise "The  key security ", <br>votre sécurité et votre tranquillité
                 d'esprit sont notre priorité.  Si vous avez des questions,<br> des préoccupations ou si vous souhaitez en savoir plus
                  sur nos services, n'hésitez pas à nous contacter. <br> Notre équipe dédiée se tient prête à répondre à vos besoins.
                   Remplissez le formulaire ci-dessous<br> ou utilisez les informations  de contact fournies, et nous vous répondrons dans les plus brefs délais.


                </p>
            </div>
 <div class="tot">

            


    <div class="container">
        <main id="agent">
            <h2>Contactez-nous </h2>
            <form>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
            <label for="adresse">Adresse_mission</label>
                <input type="text" id="numero-matricule" name="adresse" required><br>
            <label for="numero_tel">Numéro de Telephone</label>
                <input type="number" id="numero_tel" name="numero_tel" required>
                <label for="sugestion">Sugestion ou commentaire:</label>
                <input type="text" id="sugestion" name="sugestion" required>
                
                <button type="submit">Envoyer</button>
            </form>
        </main>

 </div>

        <footer>
            <p>The KEY SECURITY<br>
                Bujumbura, Commune Mukaza, Avenue du progrès<br>
                Téléphone: 22224501/72002005<br>
                email: <a href="mailto:keysec2024@gmail.com">keysec2024@gmail.com</a>
            </p>
        </footer>
    </div>
</body>
</html>
