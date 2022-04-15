<?php

// Verifying form fields
if(isset($_POST['data_name']) && !empty($_POST['data_name'])
&& isset($_POST['data_price']) && !empty($_POST['data_price'])
&& isset($_POST['data_src']) && !empty($_POST['data_src'])
&& isset($_FILES['data_img']) && !empty($_FILES['data_img'])){

    // Data cleaning & storing in variables
    $Noms = strip_tags($_POST['data_name']);
    $Prix = strip_tags($_POST['data_price']);
    $Sources = strip_tags($_POST['data_src']);
    $Images = strip_tags($_FILES['data_img']['name']);
    

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["data_img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["data_img"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["data_img"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["data_img"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["data_img"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }
  


    // Data insertion into the database
    require_once('db_connection.php');
    $sql = 'INSERT INTO `Produits` (`Noms`, `Prix`, `Sources`, `Images`) VALUES (:Noms, :Prix, :Sources, :Images);';
    $query = $db->prepare($sql);
    $query->bindValue(':Noms', $Noms, PDO::PARAM_STR);
    $query->bindValue(':Prix', $Prix, PDO::PARAM_STR);
    $query->bindValue(':Sources', $Sources, PDO::PARAM_STR);
    $query->bindValue(':Images', "../backOffice/upload/".$Images, PDO::PARAM_STR);
    $query->execute();

    // Redirection
    echo '<div>Project added.</div>';
    echo '<div><a href="index.php"><button>Back</button></a></div>';

//If the form fields are empty
} else {
    echo "Complete all fields. ";
    echo '<div><a href="index.php"><button>Back</button></a></div>';
} 