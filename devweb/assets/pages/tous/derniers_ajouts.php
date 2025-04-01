<?php include '../../inc/top.php';
    $sql_filtre = 'SELECT * FROM catalogue ORDER BY id DESC;';
    include '../../inc/database.php';
    $last = $connexion->query($sql_filtre);
?>
<main>
    <h2>Derniers ajouts :</h2>
    <section id="all_content">
    <?php
        foreach($last AS $l):
        ?>

        <article>
        <div id="overflow">
            <img src="../../../uploads/<?= $l['logo'] ?>" alt="<?= $l['nom'] ?>">
            </div>
            <p><?= $l['year'] ?></p>
            <p><?= $l['nom'] ?></p>

            <div>
                <p id="card_genre"><?= $l['category'] ?></p>
                <!--Catégorie : film ou série?-->
                <p><?= $l['type'] ?></p>
            </div>
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