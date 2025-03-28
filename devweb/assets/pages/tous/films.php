<?php include '../../inc/top.php';
    $sql_filtre = 'SELECT * FROM catalogue WHERE type="movie";';
    include '../../inc/database.php';
    $films = $connexion->query($sql_filtre);
 ?>
<main>
    <h2>Tous les films :</h2>
    <section id="all_content">
        <?php
        foreach($films AS $f):
        ?>

        <article>
        <div id="overflow">
            <img src="../../../uploads/<?= $f['logo'] ?>" alt="<?= $f['nom'] ?>">
            </div>
            <p><?= $f['year'] ?></p>
            <p><?= $f['nom'] ?></p>

            <div>
                <p id="card_genre">thriller</p>
                <!--Catégorie : film ou série?-->
                <p><?= $f['type'] ?></p>
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
<script type="text/JavaScript" src="<?= ROOT ?>assets/scripts/aside.js"></script>
<?php include '../../inc/bottom.php'; ?>