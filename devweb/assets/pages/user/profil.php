<?php include '../../inc/top.php';
    $sql_filtre = 'SELECT * FROM catalogue WHERE type="movie";';
    include '../../inc/database.php';
    $films = $connexion->query($sql_filtre);
?>
<main>

    <img id="pfp" src="../../images/user-round.png" alt="photo de profil">

    <table id="profile_table">
        <thead>
            <tr>
                <th>Activité</th>
                <th>Aimé</th>
                <th>Commentaires</th>
                <th>Mes informations</th>
                <th><a href="profil_update/profil_edit.php"><img class="pfp" src="../../images/settings.png" alt="photo de profil"></a></th>
            </tr>
        </thead>
        <tbody>
            <td colspan="4">
            <section>


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
                    <p id="card_genre"><?= $f['category'] ?></p>
                    <!--Catégorie : film ou série?-->
                    <p><?= $f['type'] ?></p>
                    </div>
                    </div>
                    </article>
                    <?php endforeach; ?>





                </section>
            </td>
        </tbody>

    </table>

</main>
<aside id="">
    <img id="view_less" src="../../images/chevron-left.png" alt="obligatoire">

    <section>
    <img src="../../images/suzume.jpeg" alt="obligatoire">

    <h2 id="titre">TITRE<h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae placeat architecto, sequi eligendi itaque exercitationem aperiam nulla doloribus cupiditate nisi ut non quae, saepe, consectetur dolorum! Placeat repellendus culpa hic?</p>
    </section>
</aside>
<?php include '../../inc/bottom.php'; ?> 