<?php include '../../inc/top.php';
    $sql = 'SELECT * FROM user WHERE username="'.$_SESSION['user'].'";';
    include '../../inc/database.php';
    $infos = $connexion->query($sql);
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
                <!--Modèle de carte de film / série-->
                <article>
                    <div id="overflow">
                    <img src="../../images/carrousel/img-2.jpg" alt="jsp mais faut remplir">
                    </div>
        
                    <p>2025</p>
                    <!--Police spéciale à prévoir pour le titre-->
                    <p id="card_title">Titre</p>
                    <!--Jsp si on met le genre (drame, thriller, etc) ou la note du film ou de la série-->
                    <div>
                        <p id="card_genre">thriller</p>
                        <!--Catégorie : film ou série?-->
                        <p>serie</p>
                    </div>
                </article>
            </section>
</td>
        </tbody>

    </table>

</main>
<aside id="">
    <img id="view_less" src="../../images/x.png" alt="obligatoire">
    <img src="../../images/suzume.jpeg" alt="obligatoire">

    <h2 id="titre">TITRE<h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae placeat architecto, sequi eligendi itaque exercitationem aperiam nulla doloribus cupiditate nisi ut non quae, saepe, consectetur dolorum! Placeat repellendus culpa hic?</p>
</aside>
<?php include '../../inc/bottom.php'; ?> 