<?php

$host = 'localhost';
$dbname = 'projet11';
$username = 'phpmyadmin';
$password = 'MamaLenaSvetaAlexis258793.';

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);




$regleURL = "/^[a-zA-Z0-9:.\/-]+$/";
$regleNomPrenom = "/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$/";
$reglePrix = "/^[0-9]+$/";

if((isset($_FILES['imgBO']))&&(preg_match($regleURL, $_FILES['imgBO']["tmp_name"]))){
    $imgBO = $_FILES['imgBO'];
}
if((isset($_POST['nom']))&&(preg_match($regleNomPrenom, $_POST['nom']))){
    $nom = $_POST['nom'];
}
if((isset($_POST['prix']))&&(preg_match($reglePrix, $_POST['prix']))){
    $prix = $_POST['prix'];
}
if(isset($_POST['source'])){
    $source = $_POST['source'];
}
if(($imgBO)&&($nom)&&($prix)&&($source)){
    $res = array('validation' => "Cbon");
    echo json_encode($res);

/*     $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); */

    $updateprod = $conn->prepare('INSERT INTO Produits (Noms, Images, Prix, Sources) VALUES (?, ?, ?, ?)');
    $updateprod->execute(array($nom, "slt", $prix, $source));
}




if($conn === false){
	die("Erreur");
}
}catch (PDOException $e){
  	die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}

?>