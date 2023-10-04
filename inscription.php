<?php
    
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "mowadaba_db");
    
    // Vérifiez la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérez les données du formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $dateNaissance = $_POST["dateNaissance"];
        $sexe = $_POST["sexe"];
        $classe = $_POST["classe"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $telephonePere = $_POST["telephonePere"];
        $telephoneMere = $_POST["telephoneMere"];
        $cin = $_POST["cin"];
        $massar = $_POST["massar"];
    
        // Préparez la requête SQL pour l'insertion
        $sql = "INSERT INTO etudiants (nom, prenom, date_naissance, sexe, classe, email, telephone, telephone_pere, telephone_mere, cin, massar)
                VALUES ('$nom', '$prenom', '$dateNaissance', '$sexe', '$classe', '$email', '$telephone', '$telephonePere', '$telephoneMere', '$cin', '$massar')";
    
        // Exécutez la requête
        if ($conn->query($sql) === TRUE) {
            echo "Inscription réussie pour $prenom $nom!";
        } else {
            echo "Erreur lors de l'inscription: " . $conn->error;
        }
    } else {
        echo "Erreur lors de la soumission du formulaire.";
    }
    
    // Fermez la connexion
    $conn->close();
?>