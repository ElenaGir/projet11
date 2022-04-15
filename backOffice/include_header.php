<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shuffle | Back Office</title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Karla:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../build/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f5e209f987.js" crossorigin="anonymous"></script>
</head>
<body class="w-screen h-screen">
<header class="w-full flex flex-col">
    <nav class="h-20 flex justify-between items-center text-center shadow-md">
        <a href="index.php"><h1 class="p-5 text-xl">Shuffle</h1></a>
        <div class="flex justify-evenly">
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
<main class="shadow-custom 5w-full flex flex-wrap justify-center">