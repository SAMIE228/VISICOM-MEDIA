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
if (isset ($_POST['commande']))
{
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $support = $_POST['support'];
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];
    $copie = $_POST['copie'];
    $adress = $_POST['adress'];
    $fichier = $_POST['fichier'];
    $livraison = $_POST['livraison'];

    $sql = ("INSERT INTO `impression`(`nom`, `telephone`, `email`, `support`,`longueur`,`largeur`,`copie`,`adress`,`fichier`,`livraison`) VALUES (:nom, :telephone, :email, :support, :longueur, :largeur, :copie, :adress, :fichier, :livraison)");
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':support', $support);
    $stmt->bindParam(':longueur', $longueur);
    $stmt->bindParam(':largeur', $largeur);
    $stmt->bindParam(':copie', $copie);
    $stmt->bindParam(':adress', $adress);
    $stmt->bindParam(':fichier', $fichier);
    $stmt->bindParam(':livraison', $livraison);

    $stmt->execute();
    header('location:print.php');
    //pour changer deux ou plus dans une seul fois clique sur ctrl +d
}

?>