<?php
session_start();

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['c_password'])){
    if($_POST['password'] == $_POST['c_password']){

    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);

    include '../../inc/database.php';

    // Vérifier si le pseudo existe déjà
    $sql_check = 'SELECT username FROM user WHERE username LIKE "%'.$user.'%";';
    $check = $connexion->query($sql_check);
    $user_exists = $check->fetch(); // récupère les données de la requête

    if ($user_exists > 0) { //moi j'aurais mis diferent de zero et pas supèrieur a zero
        $_SESSION['inscription_error'] = "Ce nom d'utilisateur est déjà pris. Veuillez en choisir un autre.";
        header("location:inscription.php");
    } else {

    // Requête

    $sql = "INSERT INTO user (username, password) VALUES ('$user', '$pass');";

    //nTest d'ajout

        if($connexion -> query($sql)){
            header("location:../../../index.php");
        } else {
            header("location:../erreur.php");
        }

    }
    } else {
        $_SESSION['inscription_error'] = "Les mots de passe ne correspondent pas.";
        header("location:inscription.php");
    }
} else {
    $_SESSION['inscription_error'] = "Veuillez renseigner tous les champs.";
    header("location:inscription.php");
}
?>