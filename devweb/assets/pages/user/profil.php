<?php include '../../inc/top.php';
    $sql = 'SELECT * FROM user WHERE username="'.$_SESSION['user'].'";';
    include '../../inc/database.php';
    $infos = $connexion->query($sql);
?>
<main>
    <?php echo "<h2>Bienvenue ".$_SESSION['user']."</h2>"; ?>

    <div class="deconnexion">
        <a href="../deconnexion.php">Se déconnecter</a>
    </div>

    
</main>
<?php include '../../inc/bottom.php'; ?>