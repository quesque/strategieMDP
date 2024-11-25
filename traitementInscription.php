<?php
    include_once 'mesFonctionsAccesAuxDonnees.php';
    include_once 'mesFonctions.php';
    	
   
    $pdo = connexion();

            
            $login = $_POST['login'];
            $pwd = $_POST['password'];

            
                $reglesOk = true;
                //VERIFIER QUE LES 2 MOTS DE PASSE SONT EGAUX
                 if ($pwd != $_POST['confirm_password']){
                     echo "les mots de passe ne sont pas identiques";
                    $reglesOk=false;
                    }
                else { 
                    // VERIFIER QUE LE MOT DE PASSE RESPECTENT LES NORMES DE L'ANSSI
                    $reglesOk = verifMdp($pwd);
                }

                if (!$reglesOk){
                        echo "mot de passe incorrect<br>";
                        echo "Votre mot de passe doit comporter au minimum 10 caractères et au moins une majuscule,un chiffre, un caractère spécial <br>";
                    }

                else {


                    if (addUser($pdo, $login, $pwd)){
                        echo "inscription validée. Mot de passe accepté";

                    }
                    else {
                         echo "login déjà existant, veuillez recommencer avec un autre login";
                     }


                }
           

	
	

?>