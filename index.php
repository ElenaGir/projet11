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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuffle</title>
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Karla:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./build/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/f5e209f987.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
</head>

<body>
    <header class="bg-header  flex-col justify-center h-screen items-center sm:h-5/6 xl:h-screen">
        <!-- background img/video -->
        <section class="hero-wrapper -z-50 w-screen sm:bg-hidden h-screen  fixed">
            <div class="backgr img  h-full sm:hidden"></div>
            <div class=" hidden sm:flex"> <video loop muted="muted " autoplay>
                    <source src="./assets/images/video_cafe.mp4" />
                </video>
            </div>
        </section>

        <!-- barre nav -->
        <nav id="navbar" class="flex items-center justify-between flex-wrap bg-hidden p-6 fixed w-full z-10 top-0">
            <div class="flex items-center flex-shrink-0 text-white ">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                    <p class=" cinzel text-2xl  sm:text-4xl xl:text-6xl">
                        
                    <!-- <i class="em em-grinning"> -->

                        </i>Shuffle café</p>
                </a>
            </div>

            <div class="block lg:hidden">
                <button id="nav-toggle"
                    class="flex items-center px-3 py-2  text-white border-amber-500 hover:text-amber-900 hover:border-amber-900">
                    <svg class="fill-current h-8 w-8" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-screen flex-grow h-screen sm:h-auto lg:flex lg:items-center lg:w-auto hidden  pt-6 lg:pt-0  bg-white text-2xl text-black lg:bg-transparent lg:text-base lg:text-white"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <!-- <li class="mr-3">
                  <a class="inline-block py-2 px-4 text-white no-underline" href="#"></a>
                </li> -->
                    <li class="">
                        <a class="inline-block lg:text-white text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#propos">À PROPOS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block lg:text-white text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#specialites">SPÉCIALITÉS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block lg:text-white text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#cafes">NOS CAFÉS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block lg:text-white text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#anecdotes">ANECDOTES</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block lg:text-white text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#desserts">NOS DESSERTS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block lg:text-white text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#formulaire">CONTACT</a>
                    </li>
                </ul>
            </div>


        </nav>
        <!-- ...... -->

        <div class="flex h-full xl:h-full sm:h-96 items-center  bg-hidden font-serif ">
            <h1 class="mx-5 text-2xl sm:text-5xl  xl:text-8xl uppercase text-white cinzel">
                <p class="">Welcome to </p>
                <p class="p-4 mx-2 md:mx-28 ">THE SHUFFLE</p>
            </h1>
        </div>

    </header>

    <main class=" bg-white min-h-full  min-w-full bg-cover w-screen">

        <!-- A Propos -->
        <section id="propos" class="
        h-full
        karla
        md:flex
        flex-row
        justify-center
        w-full
        items-center
        ">
            <div class=" flex flex-col p-8 justify-center items-center">
                <div class="text-2xl xl:text-5xl flex flex-col justify-center items-center">
                    <p class="text-amber-900 text-2xl lg:text-5xl mb-4">À propos</p>
                    <p class="text-2xl lg:text-5xl font-bold mb-4">The Shuffle</p>
                </div>
                
                <div>
                    <p class="text-justify italic text-lg xl:text-2xl">Certains pensent qu'on ne changera pas le
                        monde...Nous si.
                        Et avec l'acte le plus quotidien du monde : en buvant le café!
                        Nos cafés 100% biologiques des meilleurs producteurs du monde.
                        Nos pâtisseries 100% faite maison avec les ingrédients français.
                        Les amateurs du régime sans sucre et sans lactose trouverons aussi leur bonheur.
                        Ainsi en vous régalant, vous réalisez un acte de bienveillance pour vous et pour la planète.
                    </p>
                </div>
            </div>

            <div>
                <img class=" p-10 " src="./assets/images/image_a_propos.jpg" alt="" />
            </div>

        </section>

        <!-- Spécialités -->
        <section id="specialites" class=" 
        h-full
        flex 
        flex-col
        justify-center
        items-center
        font-serif 
        text-white
        cinzel
        text-sm sm:text-lg lg:text-2xl
        ">

            <p class="text-lg sm:text-2xl lg:text-4xl p-8">SPÉCIALITÉS</p>
            <P class="p-8">Kopi Luwak (Indonésie)</P>
            <P class="p-8">Blue Mountain (Jamaïque)</P>
            <P class="p-8">Kona Coffee (Hawaï)</P>
            <P class="p-8">Le Bourbon Pointu (La Réunion)</P>
        </section>

        <!-- Carouselle Cafés -->
        <section id="cafes" class="h-full">
            <h2 class="cinzel text-xl sm:text-2xl lg:text-6xl p-4">Nos cafés</h2>
            <div class="owl-carousel">
                <?php $stmt = $conn->query($sql); ?>
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div> 
                        <img src="<?php echo htmlspecialchars($row['Images']); ?>" class="block w-full" alt="<?php echo htmlspecialchars($row['Noms']); ?>"/>
                        <p class="text-center cinzel pt-2 text-lg sm:text-2xl lg:text-3xl"><?php echo htmlspecialchars($row['Noms']); ?></p>
                        <p class="text-center cinzel pb-2 text-lg sm:text-2xl lg:text-3xl"><?php echo htmlspecialchars($row['Prix']); ?>€</p> 
                    </div>
                <?php endwhile; ?>
            </div>
        </section>

        <!-- Anecdotes -->
        <section id="anecdotes" class="w-full  text-lg text-white text-justify flex flex-col justify-center items-center md:flex-row ">
            
             <div id="anim" class="flex justify-center items-center ">
                <img id ="soucoupe" class="w-64 lg:w-96"src="./assets/images/soucoupe.png" alt="soucoupe de tasse animée"> 
                <img id ="tasse" class="w-44 lg:w-64 "src="./assets/images/tasse.png" alt="tasse avec cafee animée"> 
               
            </div>
            
            <div class=" md:w-5/6 p-10 flex flex-col justify-center items-center">
                <h2 class="cinzel text-2xl md:text-3xl lg:text-5xl text-justify mb-6" >Le saviez-vous ?</h2>
                 <p id = "lettre"class="tx cinzel text-3xl font-bold lg: text-5xl"><span>C</span><span>O</span><span>F</span><span>F</span><span>E</span><span>E</span></p> 
                    <div class=" md:text-lg lg:text-2xl">
                        <p>Le café est la deuxième marchandise la plus échangée dans le monde derrière le pétrole.</p>
                        <p>Le café a un impact positif sur la mémoire à court terme, psychotechnique ainsi que sur le QI. Des études scientifiques ont mis en évidence une corrélation entre ces effets positifs et la quantité consommée de café.</p>
                        <p>Le café le plus cher du monde est produit à partir de baies de café préalablement digérées par des éléphants et récupérées dans leurs excréments. Ce café très prisé coûte aux alentours de 1 000 euros le kilo.</p>
                        <p>Le Brésil est le principal pays producteur du monde, il représente 40 % de la production mondiale de café. Au cours des trois dernières années, le pays a produit chaque année entre 45 et 50 millions de sacs de 60 kg de café.</p>
                    </div>
            </div>
        </section>


        <!-- Carouselle Desserts -->
        <section id="desserts" class="h-full">
            <h2 class="cinzel text-xl p-4  sm:text-2xl lg:text-6xl ">Nos desserts</h2>
            <div class="owl-carousel">
                <?php $stmt = $conn->query($sql2); ?>
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div> 
                        <img src="<?php echo htmlspecialchars($row['Images']); ?>"class="block w-full" alt="<?php echo htmlspecialchars($row['Noms']); ?>"/>
                        <p class="text-center cinzel pt-2 text-lg sm:text-2xl lg:text-3xl"><?php echo htmlspecialchars($row['Noms']); ?></p>
                        <p class="text-center cinzel pb-2 text-lg sm:text-2xl lg:text-3xl"><?php echo htmlspecialchars($row['Prix']); ?>€</p> 
                    </div>
                <?php endwhile; ?>
              </div> 
        </section>

        <!-- Formulaire -->
      
        <section id="formulaire" class=" w-screen flex flex-col-reverse lg:flex-row h-full justify-center items-center">
            <img class="lg:w-1/2 h-full float-left" src="./assets/images/bg_form.svg" alt="caf">
            <form method="post" class="p-10 w-full flex-col  md:w-3/4  flex justify-center ">
                <h2 class="karla font-bold text-2xl sm:text-4xl lx:text-5xl pb-5">CONTACTEZ-NOUS</h2>
               
                <div>
                    <input class="w-full h-14 border p-4" placeholder="Entrez votre Nom" id="inputNom" name="nom" type="text" pattern="[\ a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ'-]+$" required>
                    <p id="errorNom" class="invisible text-red-500">ENTREZ LE NOM VALIDE,  S’IL VOUS PLAIT. (ex. Pierre Giraud)</p>
                </div>
                
                <div>
                    <input class="w-full h-14 border pl-2" placeholder="Entez une adresse email valide" id="inputEmail" name="email" type="email" pattern="[a-z0-9._-]+@[a-zA-Z0-9.-]+\.[a-z]{2,6}$" required>
                    <p id="errorEmail" class="invisible text-red-500">ENTREZ LE EMAIL VALID,  S’IL VOUS PLAIT. ( ex. p.giraud@gmail.com)</p>
                </div>
                <div>
                <textarea class=" w-full h-60 border pl-2 pt-2" placeholder="Entrez votre message" id="inputMsg" name="message" required></textarea>
                <p id="errorMsg" class="invisible text-red-500">ENTREZ VOTRE MESSAGE,  S’IL VOUS PLAIT. (le champ ne doit pas être vide)</p>
            </div>
               
                <div class="pt-4">
                    <p id="validMsg" class="invisible "></p>
                    <input class="text-white px-6 py-2 text-xl float-right" id="btnValider" type="submit" value="Envoyer">
                </div>
                <!-- <div class="msg">
                <div class="bb">Merci</div>
                   </div> -->
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
      <section class="footer w-screen h-full flex flex-col justify-between px-10 py-7 text-white text-lg sm:flex-wrap sm:flex-row  mb-0 ">
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
            <img class="w-2/4 h-auto" src="./assets/images/coeur.png" alt="grains de café en form de coeur">
            <ul>
                <li>Plan :</li>
                <li><a href="#propos">A PROPOS</a></li>
                <li><a href="#specialites">SPECIALITES</a></li>
                <li><a href="#cafes">NOS CAFES</a></li>
                <li><a href="#anecdotes">ANECDOTES</a></li>
                <li><a href="#desserts">NOS DESSERTS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </section>
        <section class="h-full">
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
    </section>
        <div class="text-center  p-2 mb-2 text-white text-xs sm:text-sm xl:text-xl ">Copyright &copy;2022 All rights reserved</div>
    </footer>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="./js/script.js"></script>
<script src="./js/form.js"></script>
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