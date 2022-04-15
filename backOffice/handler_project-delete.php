<?php

// Verifying form fields
if(isset($_GET['id_prod']) && !empty($_GET['id_prod'])){

    require_once('db_connection.php');

    // Data cleaning & storing in variable
    $id_prod = $_GET['id_prod'];

    // Checking existence of the id sent by url (method GET)
    $sql = 'SELECT * FROM `Produits` WHERE `id_prod` = :id_prod;';
    $query = $db->prepare($sql);
    $query->bindValue(':id_prod', $id_prod, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
    if ($result) {
        // Delete request
        $sql = 'DELETE FROM `Produits` WHERE `id_prod` = :id_prod;';
        $query = $db->prepare($sql);
        $query->bindValue(':id_prod', $id_prod, PDO::PARAM_INT);
        $query->execute();
        // Success
        echo '<div>Project deleted!</div>';
        echo '<div><a href="index.php"><button>Back</button></a></div>';
    } else {
        echo '<div>This ID doesn\'t exist.</div>';
        echo '<div><a href="index.php"><button>Back</button></a></div>';
    }

//If the form fields are empty    
} else {
    echo '<div>URL is not valid...</div>'; 
    echo '<div><a href="index.php"><button>Back</button></a></div>';
}