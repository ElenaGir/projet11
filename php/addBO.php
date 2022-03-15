<?php

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
if(($imgBO)&&($nom)&&($prix)){
    $res = array('validation' => "Cbon");
    echo json_encode($res);
}
?>