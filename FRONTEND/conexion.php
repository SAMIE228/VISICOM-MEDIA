<?php

//La conexion a la base de données

$servername="localhost";
$username="root";
$password="";
$dbname="VisicomData";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "la connexion a ete bien etablie"

}
catch (PDOException $e) {
    echo "la connexion a echoué:" . $e->getMessage();
}
if (isset ($_POST['envoyer']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = ("INSERT INTO `formcontact`(`prenom`, `nom`, `email`, `message`) VALUES (:prenom, :nom, :email, :message)");
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    $stmt->execute();
    header('location:acceuil.php');
    //pour changer deux ou plus dans une seul fois clique sur ctrl +d
}

?>