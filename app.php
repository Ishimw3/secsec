<?php
include './client.php';



    $conn = new mysqli("localhost", "root", "", "securitydb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "success";
    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        if(isset($_POST['type']) && $_POST['type'] === 'client'){
    
            $nom = $_POST["nom"];
            $adresse = $_POST['adresse'];
            $numero = $_POST['numero'];
            $employe = $_POST['num-employe'];
            
            $client_insertion = "INSERT INTO client(`id_client`, `nom_client`, `id_contact`, `nombre_agent`) VALUES ('$nom', '$nom','$numero', '$employe')";      
    
            // Execute the SQL statement and check if the insertion was successful
            if ($conn->query($client_insertion) === TRUE) {
                header("Location: service.php");
                exit(); // quitter le script
            } else {
                echo "Erreur : " . $sql . "<br>" . $conn->error;
            }
    
        } 

        
    }


    

    $conn->close();
?>