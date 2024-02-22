<?php
/*$name = $_POST["name"];
$mail = $_POST["mail"];
$password = $_POST["password"];



if (!empty($name) && !empty($mail) && !empty($password)){
echo "Votre nom: $name <br> Votre mail: $mail <br> Votre passe: $password ";
}else{
    echo "veuillez remplir tout les champs";
};

$link = mysqli_connect("localhost","root","chems75","entrenement");
//je controle la connection de ma base de donnée)
if (mysqli_connect_errno()){
   printf("Echec lors de la connexion : %s\n", mysqli_connect_error());

}
$sqli = "INSERT INTO test (`name`,`mail`,`password`) VALUES ('$name','$mail','$password')";
mysqli_query($link, $sqli);
//je controle ma table de base de donnee avec ces valeurs

//var_dump($_POST);*/

?>