<?php

if (isset($_GET['id_prod']) && !empty($_GET['id_prod'])) {
    require_once('db_connection.php');
    $id_prod = strip_tags($_GET['id_prod']);

    // Checking existence of the id sent by url (method GET)
    $sql = 'SELECT * FROM `Produits` WHERE `id_prod` = :id_prod;';
    $query = $db->prepare($sql);
    $query->bindValue(':id_prod', $id_prod, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

//If the form fields are empty   
} else {
    echo '<div>URL is not valid...</div>'; 
    echo '<div><a href="index.php"><button>Back</button></a></div>';
}

?>

<?php include 'include_header.php' ?>

<div class="justify-center">
    <form id="addBox" action="handler_project-add.php" method="post" class=" bg-custom w-64 h-96 mx-3 mt-5 mb-2 border-2 rounded-xl flex flex-col items-center justify-evenly text-center">
        <div id="preview">
            <div id="boxFile" class="rounded-full w-24 h-24 border-2 border-white bg-white"></div>
        </div>
        <div class="h-16 w-40 rounded-lg border-2 bg-gray-100 flex justify-center items-center">
            <label for="fileAdd" class="flex items-center justify-center cursor-pointer">
                <i class="pr-2 fa fa-folder-open fa-2x"></i>
                <span class="block text-gray-400 font-normal">Upload Image</span>  
            </label>
            <input id="fileAdd" type="file" class="opacity-0 absolute top-0" name="data_img" accept=".png,.jpg jpeg,svg">
        </div>
        <input class="border rounded placeholder:pl-2 pl-2" type="text" name="data_name" placeholder="Nom">
        <input class="border rounded placeholder:pl-2 pl-2" type="text" name="data_price" placeholder="Prix">
        <div class="flex justify-center items-center">
            <input type="radio" name="data_src" id="cafe" value="1">
            <label class="pl-2" for="cafe">Café</label>
            <input class="ml-5" type="radio" name="data_src" id="dessert" value="2">
            <label class="pl-2" for="dessert">Dessert</label>
        </div>
        <button type="submit" class="border rounded hover:bg-slate-100 shadow-md px-4 py-1">Valider</button>
    </form>
</div>

<?php include 'include_footer.php' ?>  