<?php include '../../inc/top.php'; ?>
<main>
    <?php echo "<h2>Bienvenue ".$_SESSION['user']."</h2>"; ?>
    <h3>Mes informations :</h3>

    <div class="deconnexion">
        <a href="../deconnexion.php">Se déconnecter</a>
    </div>
</main>
<?php include '../../inc/bottom.php'; ?>