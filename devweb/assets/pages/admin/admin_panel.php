<?php include '../../inc/top.php'; ?>
<main>
    <h2>Admin pannel</h2> 
    <h3>Ne partagez pas votre mot de passe aux tiers.</h3>

    <a class="deconexion" href="../deconnexion.php">Se déconnecter</a>


    <table>
        <caption><h3>Liste des inscrits</h3></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        <?php
        // je me connecte à la DB
        include '../../inc/database.php';

        // je lis tout
        $sql_user_list = "SELECT * FROM user";
        $reponse = $connexion->query($sql_user_list);

        // j'affiche avec une boucle
        foreach($reponse AS $r): ?>

            <tr>
                <td><?= $r['id'] ?></td>
                <td><?= $r['username'] ?></td>
                <td><?= $r['password'] ?></td>
                <td>
                    <form action="user_sup.php" method="post">
                        <input type="hidden" name="id" value="<?= $r['id']?>">
                        <input type="image" src="../../images/x.png" alt="supprimer">
                    </form> 
                </td>
            </tr>


        <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Ajouter du contenu</h3>
    <form action="content_add.php" method="post" enctype="multipart/form-data">
        <select name="type">
            <option selected disabled>Type</option>
            <option value="movie">Film</option>
            <option value="serie">Série</option>
            <option value="anime">Anime</option>
        </select>

        <input type="text" name="nom" placeholder="Titre" maxlength="100">
        <input type="text" name="year" placeholder="Année de parution" minlengh="4" maxlength="4">
        <input type="text" name="author" placeholder="Auteur" maxlength="100">
        <textarea name="synopsis" placeholder="Synopsis" maxlength="2000"></textarea>

        <!--id file pour le js-->
        <input type="file" name="logo" accept="image/*" id="file">
        <label for="file">Logo 1920x1080

        <img id="preview" src="" alt="">
        
        </label>

        <input type="submit" value="   Ajouter   ">

        <script type="text/JavaScript" src="../../scripts/file_preview.js"></script>
    </form>

</main>
<?php include '../../inc/bottom.php'; ?>