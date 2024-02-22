<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$password = $_POST["password"];
//recuperation des valeurs

if (!empty($name) && !empty($mail) && !empty($password)){
    echo "Votre nom: $name <br> Votre mail: $mail <br> Votre passe: $password ";
    }else{
        echo "veuillez remplir tout les champs";
    };

$servername = "localhost";
$username = "root";
$password = "chems75";

try {
  $conn = new PDO("mysql:host=$servername;dbname=entrenement", $username, $password);
  // set the PDO error mode to exception _difinir le mode d'erreur PDO en tant que exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // utilisation de requette préparees pour eviter les attaques pas injection SQL

  $sql = "INSERT INTO test (`name`, `mail`, `password`) VALUES (:name, :mail, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':mail', $mail);
  $stmt->bindParam(':password', $password);

  $stmt->execute();

  //$conn->query($sql);

  //affichage de la requette
  echo " Donnes insertes avec succes";
  echo "Connected successfully";

} catch(PDOException $e) {
  echo "Connection failed__ Errou erreur de connection :" . $e->getMessage();
}

?>