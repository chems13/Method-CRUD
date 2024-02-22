<form method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" placeholder="Nam" id="name" name="name">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="email" placeholder="Mail" id="mail" name="mail">
        </div>
        <div>
            <div>
            <button type="submit">envoyer</button>
        </div>

</form>   

<?php

// $id = $_GET['id'];

$name= $_POST['name'];
$mail = $_POST['mail'];

// var_dump($_POST);

$servername = "localhost";
$username = "root";
$password = "chems75";

try {
  $conn = new PDO("mysql:host=$servername;dbname=entrenement", $username, $password);
  // set the PDO error mode to exception _difinir le mode d'erreur PDO en tant que exception
  echo "VOUS ETES CONNECTE A LA BASE DE DONNEES";
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // utilisation de requette préparees pour eviter les attaques pas injection SQL

//   $sql = "INSERT INTO test (`name`, `mail`) VALUES (:name, :mail)";
//   $stmt = $conn->prepare($sql);
//   $stmt->bindParam(':name', $name);
//   $stmt->bindParam(':mail', $mail);

//   $stmt->execute();

  //$conn->query($sql);

  //affichage de la requette
//   echo " Donnes insertes avec succes";
//   echo "Connected successfully";

} catch(PDOException $e) {
  echo "Connection failed__ Errou erreur de connection :" . $e->getMessage();
}


// "SELECT * FROM test WHERE id = 1";

// UPDATE EN PDO
$sql = "UPDATE test SET name = '$name', mail = '$mail' WHERE id= 1";
$stmt= $conn->prepare($sql);
$stmt->execute();

echo "donnes modifiées avec succes";

?>