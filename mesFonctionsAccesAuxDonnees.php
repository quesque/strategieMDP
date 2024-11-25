<?php

    function connexion() {
        try {
            
            //INFORMATIONS DE CONNEXION A LA BDD
           $host_name = '127.0.0.1'; // adresse IP du serveur de données MySQL
           $database = ''; // nom de votre base de données
           $user_name = ''; // nom du compte utilisateur MySql qui a les droits su rvotre BDD
           $password = ''; // mdp du compte utilisateur
            $pdo = new PDO('mysql:dbname='.$database.';host='.$host_name,$user_name,$password);
           
        }
        catch (PDOException $e) {
            echo 'Connexion BDD échouée : '.$e->getMessage();
        }
        return $pdo;
       
    
    }


    function addUser($pdo, $login, $pwd) {
        
           
            $reqPrep = $pdo->prepare('INSERT INTO user VALUES( :mail, :motdepasse)');
            $bv1 = $reqPrep->bindValue(':mail',$login);
            $bv2 = $reqPrep->bindValue(':motdepasse',$pwd);
            $ajout = $reqPrep->execute();
        
       
        return $ajout;
    }

    
   


   


   
     

?>