<?php
session_start();
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['c_password'])){
    if($_POST['password'] == $_POST['c_password']){

    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);

    include '../inc/database.php';

    // Vérifier si le pseudo existe déjà
    $sql_check = 'SELECT username FROM user WHERE username LIKE "%'.$user.'%";';
    $check = $connexion->query($sql_check);
    $user_exists = $check->fetchColumn(); // Lire la colone username

    if ($user_exists > 0) { //moi j'aurais mis diferent de zero et pas supèrieur a zero
        echo "Ce nom d'utilisateur est déjà pris. Veuillez en choisir un autre.";
    } else {

    // Requête

    $sql = "INSERT INTO user (username, password) VALUES ('$user', '$pass');";

    $connexion -> query($sql);

    //nTest d'ajout

    $sql_vu = 'SELECT username FROM user WHERE username LIKE "%'.$user.'%";';
    $sql_vp = 'SELECT password FROM user WHERE password LIKE "%'.$pass.'%";';

    $v_user = $connexion -> query($sql_vu);
    $v_pass = $connexion -> query($sql_vp);

    $ru = $v_user->fetch();
    $rp = $v_pass->fetch();

        if ($ru['username'] === $user && $rp['password'] === $pass){

            // session cookie
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header("location:../../index.php");
        } else {
            header("location:../pages/erreur.php");
        }

    }
    } else {
        echo "mdp ne correspondent pas";
    }
} else {
    echo "veullez renseigner tous les champs";
}
?>