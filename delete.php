<?php
// Vérifiez si l'ID à supprimer est fourni dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "chems75";
    $dbname = "entrenement";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Utilisez une requête préparée pour supprimer l'entrée avec l'ID spécifié
        $sql = "DELETE FROM test WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo "Enregistrement supprimé avec succès.";
    } catch (PDOException $e) {
        echo "Erreur de suppression : " . $e->getMessage();
    }

    // Fermez la connexion
    $conn = null;
} else {
    echo "ID non valide.";
}
?>
