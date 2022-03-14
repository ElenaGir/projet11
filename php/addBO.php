<?php

/* $regleURL = "/^[a-zA-Z0-9:.\/-]+$/";
$regleNom = "/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$/";
$reglePrix = "/^[0-9]+$/"; */

if(isset($_POST['imgBO'])){
    $imgBO = $_POST['imgBO'];   
}
if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
}
if(isset($_POST['prix'])){
    $prix = $_POST['prix'];
}
if(($imgBO)&&($nom)&&($prix)){
    $res = array('validation' => "Email envoyé");
    echo json_encode($res);
}
?>