<?php

include "./php/mdp.php";

$sql = "SELECT Noms,Prix,Images FROM Produits INNER JOIN Categories WHERE Sources = id_cat AND Sources = 1";
$sql2 = "SELECT Noms,Prix,Images FROM Produits INNER JOIN Categories WHERE Sources = id_cat AND Sources = 2";

try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuffle | Back Office</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./build/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f5e209f987.js" crossorigin="anonymous"></script>
</head>
<body class="w-screen h-screen">
    <header class="w-full flex flex-col">
        <nav class="h-20 flex justify-between items-center text-center shadow-md">
            <h1 class="p-5 text-xl">Shuffle</h1>
            <div class="flex justify-evenly"><!-- class="opacity-0 absolute top-0 w-0 h-0" -->
                <input id="btnCaf" class="checked:bg-slate-200" type="radio" name="menu" checked></input>
                <label class="checked:bg-slate-200" for="btnCaf">
                    <p class="p-3 text-lg">Cafés</p>
                </label>
                <input id="btnDes" type="radio" name="menu"></input>
                <label class="checked:bg-slate-200" for="btnDes">
                    <p class="p-3 text-lg">Desserts</p>
                </label>
            </div>
        </nav>
        <div>
            <h2 class="text-center text-xl p-4">Back Office</h2>
        </div>
    </header>
    <main class="shadow-custom 5w-full ">
        <div id="boxMain" class="flex flex-wrap justify-center">
            <!-- Boite + -->
            <div id="boxBOAdd" class="w-64 h-64 mx-3 mt-5 mb-2 border-2 rounded-xl flex flex-col items-center justify-evenly text-center">
                <div id="btnAdd" class="w-32 h-32 border-8 rounded-full flex justify-center items-center text-5xl hover:bg-slate-100 cursor-pointer"><i class="text-gray-400 fa-solid fa-plus"></i></div>
            </div>
            <!-- Boites -->
            <?php $stmt = $conn->query($sql); ?>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <div id="boxBO" class="w-64 h-64 mx-3 mt-5 mb-2 border-2 rounded-xl flex flex-col items-center justify-evenly text-center">
                <img src="<?php echo htmlspecialchars($row['Images']); ?>" alt="<?php echo htmlspecialchars($row['Noms']); ?>" class="rounded-full w-24 h-24 border-2 border-white">
                <div>
                    <p><?php echo htmlspecialchars($row['Noms']); ?></p>
                    <p><?php echo htmlspecialchars($row['Prix']); ?>€</p>
                    <button class="shadow-md border mt-2 mr-2 px-4 py-1 rounded-md hover:bg-slate-100">Modifier</button>
                    <button class="shadow-md border px-4 py-1 rounded-md hover:bg-slate-100" id="btnSuppr">Supprimer</button>               
                </div>
            </div>
            <?php endwhile; ?>      
        </div>
        <div id="test" class="hidden justify-center">
                <form id="addBox" method="post" class=" bg-custom w-64 h-96 mx-3 mt-5 mb-2 border-2 rounded-xl flex flex-col items-center justify-evenly text-center">
                    <div id="preview">
                        <div id="boxFile" class="rounded-full w-24 h-24 border-2 border-white bg-white"></div>
                    </div>
                    <div class="h-16 w-40 rounded-lg border-2 bg-gray-100 flex justify-center items-center">
                        <label for="fileAdd" class="flex items-center justify-center cursor-pointer">
                            <i class="pr-2 fa fa-folder-open fa-2x"></i>
                            <span class="block text-gray-400 font-normal">Upload Image</span>  
                        </label>
                        <input id="fileAdd" type="file" class="opacity-0 absolute top-0" name="imgBO" accept=".png,.jpg,.jpeg,.svg">
                    </div>
                    <input class="border rounded placeholder:pl-2 pl-2" type="text" name="nom" placeholder="Nom">
                    <input class="border rounded placeholder:pl-2 pl-2" type="text" name="prix" placeholder="Prix">
                    <div class="flex justify-center items-center">
                        <input type="radio" name="source" id="cafe" value="1">
                        <label class="pl-2" for="cafe">Café</label>
                        <input class="ml-5" type="radio" name="source" id="dessert" value="2">
                        <label class="pl-2" for="dessert">Dessert</label>
                    </div>
                    <button type="submit" class="border rounded hover:bg-slate-100 shadow-md px-4 py-1">Valider</button>
                </form>
            </div>
        </div>
    </main>
    <script src="./js/scriptBO.js"></script>
</body>
</html>

<?php

	if($stmt === false){
		die("Erreur");
	}
}catch (PDOException $e){
  	die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}

?>