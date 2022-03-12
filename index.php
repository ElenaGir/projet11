<?php

$host = 'localhost';
$dbname = 'projet11';
$username = 'phpmyadmin';
$password = 'apache2luxe';


$sql = "SELECT Noms,Prix,Images FROM Produits WHERE Sources = 1";
try{
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$stmt = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuffle</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./build/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f5e209f987.js" crossorigin="anonymous"></script>
</head>
<body class="w-screen h-screen sm:bg-blue-400 md:bg-red-600 lg:bg-green-500 xl:bg-yellow-500 2xl:bg-purple-500">
    <header></header>
    <main class="w-full">

        <!-- A Propos -->
        <section id="propos"></section>

        <!-- Spécialités -->
        <section id="specialites"></section>

        <!-- Carouselle Cafés -->
        <section id="cafes">
            <h2 class="cinzel text-xl p-4">Nos cafés</h2>
            <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <img
                        src="<?php echo $row["Images"]; ?>"
                        class="block w-full"
                        alt="<?php echo $row["Noms"]; ?>"
                        />
                        <p class="text-center cinzel pt-2"><?php echo $row["Noms"];?></p>
                        <p class="text-center cinzel pb-2"><?php echo $row["Prix"];?>€</p>
                    </div>
                    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="<?php echo $row["Images"]; ?>"
                        class="block w-full"
                        alt="<?php echo $row["Noms"]; ?>"
                        />
                        <p class="text-center cinzel pt-2"><?php echo $row["Noms"];?></p>
                        <p class="text-center cinzel pb-2"><?php echo $row["Prix"];?>€</p>
                    </div>
                    <?php endwhile; ?>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                    >
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
                >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Anecdotes -->
        <section id="anecdotes" class="w-screen p-10 text-lg text-white">
            <div class="flex items-center">
                <img src="./images/coffee.svg" alt="cafe">
                <h2 class="cinzel text-2xl">Le saviez-vous ?</h2>
            </div>
            <p>Le café est la deuxième marchandise la plus échangée dans le monde derrière le pétrole.</p>
            <p>Le café a un impact positif sur la mémoire à court terme, psychotechnique ainsi que sur le QI. Des études scientifiques ont mis en évidence une corrélation entre ces effets positifs et la quantité consommée de café.</p>
            <p>Le café le plus cher du monde est produit à partir de baies de café préalablement digérées par des éléphants et récupérées dans leurs excréments. Ce café très prisé coûte aux alentours de 1 000 euros le kilo.</p>
            <p>Le Brésil est le principal pays producteur du monde, il représente 40 % de la production mondiale de café. Au cours des trois dernières années, le pays a produit chaque année entre 45 et 50 millions de sacs de 60 kg de café.</p>
        </section>

        <!-- Carouselle Desserts -->
        <section id="desserts">
            <h2 class="cinzel text-xl p-4">Nos desserts</h2>
            <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <!-- Gateaux -->
                    <div class="carousel-item active relative float-left w-full">
                        <img
                        src="./images/desserts/gateaux.png"
                        class="block w-full"
                        alt="Gateaux"
                        />
                        <p class="text-center cinzel pt-2">Gateaux</p>
                        <p class="text-center cinzel pb-2">10€</p>
                    </div>
                    <!-- Glace -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./images/desserts/glace.png"
                        class="block w-full"
                        alt="Glace"
                        />
                        <p class="text-center cinzel pt-2">Glace</p>
                        <p class="text-center cinzel pb-2">12€</p>
                    </div>
                    <!-- Macaron -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./images/desserts/macaron.png"
                        class="block w-full"
                        alt="Macaron"
                        />
                        <p class="text-center cinzel pt-2">Macaron</p>
                        <p class="text-center cinzel pb-2">4€</p>
                    </div>
                    <!-- Tiramisu -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./images/desserts/tiramisu.png"
                        class="block w-full"
                        alt="Tiramisu"
                        />
                        <p class="text-center cinzel pt-2">Tiramisu</p>
                        <p class="text-center cinzel pb-2">11€</p>
                    </div>
                    <!-- Muffin -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./images/desserts/muffin.png"
                        class="block w-full"
                        alt="muffin"
                        />
                        <p class="text-center cinzel pt-2">Muffin</p>
                        <p class="text-center cinzel pb-2">11€</p>
                    </div>
                    <!-- Tarte -->
                    <div class="carousel-item relative float-left w-full">
                        <img
                        src="./images/desserts/tarte.png"
                        class="block w-full"
                        alt="tarte"
                        />
                        <p class="text-center cinzel pt-2">Tarte</p>
                        <p class="text-center cinzel pb-2">10€</p>
                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                    >
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
                >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Formulaire -->
        <section id="formulaire" class="flex flex-col-reverse h-screen justify-evenly items-center">
            <img src="./images/cafetiere.jpg" alt="caf">
            <form method="post" class="w-screen flex justify-center items-center">
                <h2 class="font-bold text-3xl pb-5">CONTACTEZ-NOUS</h2>
                <div class="w-5/6">
                    <input class="w-full h-14 border pl-2" placeholder="Entrez votre Nom" name="nom" type="text" pattern="[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$" required>
                    <p class="invisible">Error</p>
                </div>
                <div class="w-5/6">
                    <input class="w-full h-14 border pl-2" placeholder="Entez une adresse email valide" name="email" type="email" pattern="[a-z0-9._-]+@[a-zA-Z0-9.-]+\.[a-z]{2,6}$" required>
                    <p class="invisible">Error</p>
                </div>
                <textarea class="w-5/6 h-60 border pl-2 pt-2" placeholder="Entrez votre message" name="message" required></textarea>
                <div>
                    <p class="invisible">bravo</p>
                    <input class="text-white px-6 py-2 text-xl" type="submit" value="Envoyer">
                </div>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="w-screen h-screen flex flex-col justify-between px-10 py-7 text-white text-lg sm:flex-wrap sm:flex-row">
        <section>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-github pr-2 text-2xl"></i>
                <p>ELENAGIR</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-linkedin pr-2 text-2xl"></i>
                <p>ELENA-GIRARD</p>
            </div>
            <hr>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-github pr-2 text-2xl"></i>
                <p>OGUST25</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-brands fa-linkedin pr-2 text-2xl"></i>
                <p>AUGUST-GROS</p>
            </div>
        </section>
        <section class="flex items-center">
            <img class="w-2/4 h-auto" src="./images/coeur.png" alt="grains de café en form de coeur">
            <ul>
                <li>Plan :</li>
                <li><a href="#">A PROPOS</a></li>
                <li><a href="#">SPECIALITES</a></li>
                <li><a href="#">NOS CAFES</a></li>
                <li><a href="#">NOS DESSERTS</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </section>
        <section>
            <p>Contact :</p>
            <div class="flex items-center py-1">
                <i class="fa-solid fa-location-dot pr-2 text-2xl text-center"></i>
                <p>144 Av. des Champs-Élysées<br>75008 Paris</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-solid fa-mobile-screen-button pr-2 text-2xl text-center"></i>
                <p>06.45.25.31.25</p>
            </div>
            <div class="flex items-center py-1">
                <i class="fa-solid fa-envelope pr-2 text-2xl text-center"></i>
                <p>shuffle@hello.fr</p>
            </div>
        </section>
        <p class="text-center">Copyright &copy;2022 All rights reserved</p>
    </footer>

<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
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