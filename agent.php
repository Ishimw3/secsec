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
    
}

button:hover {
    background-color: #c0392b; /* Couleur de fond au survol */
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

    <div class="container">
        <main id="agent">
            <h2>Informations sur les Employeés</h2>
            <form action="app.php" method="POST">
                <input type="hidden" name="type" value="agent">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="numero-matricule">Numéro de Matricule:</label>
                <input type="text" id="numero-matricule" name="numero-matricule" required>

                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse" required>

                <label for="age">Âge:</label>
                <input type="number" id="age" name="age" required>

                <label for="statut">Statut:</label>
                <input type="text" id="statut" name="statut" required>

                <button type="submit">Envoyer</button>
            </form>
        </main>


        <?php



        $conn = new mysqli("localhost", "root", "", "securitydb");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            echo "";
        }

        
        if(isset($_POST['type']) && $_POST['type'] === 'agent'){
            $nom = $_POST["nom"];
            $matricule = $_POST['numero-matricule'];
            $adresse = $_POST['adresse'];
            $age = $_POST['age'];
            $statut = $_POST['statut'];

            $agent_insertion = "INSERT INTO `employe`(`nom_agent`, `numero_matricule`, `adresse`, `statut`, `age`) VALUES ('$nom', '$matricule','$adresse', '$statut', '$age')";      
            if ($conn->query($agent_insertion) === TRUE) {
                header("Location: service.php");
                exit(); // quitter le script
            } else {
                echo "Erreur : " . $sql . "<br>" . $conn->error;
            }

        }


    

    $conn->close();
?>
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
