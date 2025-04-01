<?php include '../../inc/top.php';
    $sql_filtre = 'SELECT * FROM catalogue WHERE type="serie";';
    include '../../inc/database.php';
    $serie = $connexion->query($sql_filtre);
?>
<main>
    <h2>Toutes les séries :</h2>
    <section id="all_content">
    <?php
        foreach($serie AS $s):
        ?>

        <article>
        <div id="overflow">
            <img src="../../../uploads/<?= $s['logo'] ?>" alt="<?= $s['nom'] ?>">
            </div>
            <p><?= $s['year'] ?></p>
            <p><?= $s['nom'] ?></p>

            <div>
                <p id="card_genre"><?= $s['category'] ?></p>
                <!--Catégorie : film ou série?-->
                <p><?= $s['type'] ?></p>
            </div>
        </article>
        <?php endforeach; ?>
</section>
</main>
<aside id="">
    <img id="view_less" src="../../images/x.png" alt="obligatoire">
    <img src="../../images/suzume.jpeg" alt="obligatoire">

    <h2 id="titre">TITRE<h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae placeat architecto, sequi eligendi itaque exercitationem aperiam nulla doloribus cupiditate nisi ut non quae, saepe, consectetur dolorum! Placeat repellendus culpa hic?</p>
</aside>
<?php include '../../inc/bottom.php'; ?>