<?php
   session_start(); 
   if ( isset( $_POST['login'] ) AND isset($_POST['password'])  ) {
    $login = $_POST['login']; 
    $password = $_POST['password']; 
    echo 'Identifiant : ' . $login . ' Mot de passe : ' . $password;
    $mot_de_passe = '2020';
    if  ( $_POST['password'] == $mot_de_passe){
    
     
    
     $_SESSION["id"]= $_POST["login"];
     header ('location: mini-site-routing.php?page=1');
     exit();
    }
    else {
        echo 'Mauvais couple identifiant / mot de passe.';
        echo  "<a href= 'mini-site-routing.php?page=connexion'> Reconnexion</a>";
    }
   }
  
 
   ?>