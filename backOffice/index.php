<?php
    require_once('db_connection.php');
    $sql = 'SELECT * FROM `Produits`';
    $query = $db->prepare($sql);
    $query->execute();
    $projects = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'include_header.php' ?>


<div id="boxBOAdd" class="w-64 h-64 mx-3 mt-5 mb-2 border-2 rounded-xl flex flex-col items-center justify-evenly    text-center">
    <a href="form_project-add.php">
        <div id="btnAdd" class="w-32 h-32 border-8 rounded-full flex justify-center items-center text-5xl   hover:bg-slate-100 cursor-pointer"><i class="text-gray-400 fa-solid fa-plus"></i></div>
    </a>
</div>


<?php foreach($projects as $project){ ?>
    <div id="boxBO" class="w-64 h-64 mx-3 mt-5 mb-2 border-2 rounded-xl flex flex-col items-center justify-evenly text-center">
        <img src="<?= $project['Images'] ?>" alt="<?= $project['Noms'] ?>" class="rounded-full w-24 h-24 border-2 border-white">
        <div>
            <p><?= $project['Noms'] ?></p>
            <p><?= $project['Prix'] ?>€</p>
        </div>
        <div>
            <a class="shadow-md border mt-2 mr-2 px-4 py-1 rounded-md hover:bg-slate-100" href="form_project-edit.php?id_prod=<?= $project['id_prod'] ?>">Modifier</a>
            <a class="shadow-md border px-4 py-1 rounded-md hover:bg-slate-100" href="handler_project-delete.php?id_prod=<?= $project['id_prod'] ?>">Supprimer</a>
        </div>
    </div>
<?php } ?>

<?php include 'include_footer.php' ?> 