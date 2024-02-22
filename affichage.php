<?php

$servername = "localhost";
$username = "root";
$password = "chems75";

try {
    $conn = new PDO("mysql:host=$servername;dbname=entrenement", $username, $password);
    
    echo "VOUS ETES CONNECTE A LA BASE DE DONNEES";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    
 
  } catch(PDOException $e) {
    echo "Connection failed__ Errou erreur de connection :" . $e->getMessage();
  }

//$sql = "UPDATE test SET name = '$name', mail = '$mail' WHERE id= 1";
$sql = 'SELECT * FROM test';

$stmt= $conn->prepare($sql);
$stmt->execute();

$stmts = $stmt->fetchAll();

foreach ($stmts as $stmt){
echo
  '<div>
    
    <tr>
    <td>'.$stmt["name"].'</td><br>
    <td>'.$stmt["mail"].'</td><br>
    <td>'.$stmt["password"].'</td><br>
    <td><a href="delete.php?id='.$stmt["id"].'">Supprimer</a></td>
    <td><a href="updt.php?id='.$stmt["id"].'">Modifier</a></td>
    </tr>
  </div>';
}
//var_dump($stmts);