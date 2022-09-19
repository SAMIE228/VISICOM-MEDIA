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
if (isset ($_POST['send']))
{
    
    $email = $_POST['email'];
    

    $sql = ("INSERT INTO `newsletter`( `email`) VALUES ( :email)");
    $stmt = $conn->prepare($sql);

   
    $stmt->bindParam(':email', $email);
    

    $stmt->execute();
    header('location:acceuil.php');
    //pour changer deux ou plus dans une seul fois clique sur ctrl +d
}

?>