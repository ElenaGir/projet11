<?php

// Verifying form fields
if(isset($_POST['data_name']) && !empty($_POST['data_name'])
&& isset($_POST['data_price']) && !empty($_POST['data_price'])
&& isset($_POST['data_src']) && !empty($_POST['data_src'])
&& isset($_POST['data_img']) && !empty($_POST['data_img'])){

    // Data cleaning & storing in variables
    $id_prod = strip_tags($_POST['id_prod']);
    $Noms = strip_tags($_POST['data_name']);
    $Prix = strip_tags($_POST['data_price']);
    $Sources = strip_tags($_POST['data_src']);
    $Images = strip_tags($_POST['data_img']);

    // Data insertion into the database
    require_once('db_connection.php');
    $sql = 'UPDATE `Produits` SET `Noms`=:Noms, `Prix`=:Prix, `Sources`=:Sources, `Images`=:Images WHERE `id_prod`=:id_prod;';
    $query = $db->prepare($sql);
    $query->bindValue(':id_prod', $id_prod, PDO::PARAM_INT);
    $query->bindValue(':Noms', $Noms, PDO::PARAM_STR);
    $query->bindValue(':Prix', $Prix, PDO::PARAM_STR);
    $query->bindValue(':Sources', $Sources, PDO::PARAM_STR);
    $query->bindValue(':Images', $Images, PDO::PARAM_STR);
    $query->execute();

    // Redirection
    echo '<div>Project modified.</div>';
    echo '<div><a href="index.php"><button>Back</button></a></div>';

//If the form fields are empty
} else {
    echo "Complete all fields. ";
    echo '<div><a href="index.php"><button>Back</button></a></div>';
 } 