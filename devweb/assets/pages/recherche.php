<?php include '../inc/top.php'; ?>
<main>
    <h3>Résultats pour :
<?php
include "../inc/database.php";

if(isset($_GET['search'])){

    $recherche = htmlspecialchars($_GET['search']);
    echo $_GET['search']."</h3>";

    $sql = 'SELECT * FROM catalogue WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC;';

    $recherche = $connexion->query($sql);

    ?>
    <section id="all_content">
    <?php
        foreach($recherche AS $r):
        ?>

        <article>
        <div id="overflow">
            <img src="../../uploads/<?= $r['logo'] ?>" alt="<?= $r['nom'] ?>">
            </div>
            <p><?= $r['year'] ?></p>
            <p><?= $r['nom'] ?></p>

            <div>
                <p id="card_genre">thriller</p>
                <!--Catégorie : film ou série?-->
                <p><?= $r['type'] ?></p>
            </div>
            </div>
        </article>
        <?php endforeach; ?>
</section>

<?php
} else {
    echo 'non';
}
?>
</main>
<?php include '../inc/bottom.php'; ?>