<?php include '../inc/top.php'; ?>
<main>
    <form id="mobile_form" action="<?= ROOT ?>assets/pages/mobile_recherche.php" method="get">
        <input type="search" name="search" placeholder="Rechercher film ou série...">
                <input type="submit" value="Rechercher">
    </form>
    <h3>Résultats pour :
<?php
include "../inc/database.php";
$sql = $connexion -> query('SELECT nom FROM catalogue ORDER BY id DESC');
if(isset($_GET['search'])){

    $recherche = htmlspecialchars($_GET['search']);
    echo $_GET['search']."</h3>";

    $sql = 'SELECT nom FROM catalogue WHERE nom LIKE "%'.$recherche.'%" ORDER BY id DESC;';

    $resultat = $connexion->query($sql);

    foreach($resultat AS $r):
        echo "<li>".$r['nom']."</li>";
    endforeach;

} else {
    $sql;
}
?>
</main>
<?php include '../inc/bottom.php'; ?>