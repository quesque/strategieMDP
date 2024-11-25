<!DOCTYPE html>
<html>
    <head>
        <title>Authentification</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
       <?php
       include 'inc/header.inc';
       ?>
        
        <section class="row">
            <div class="side">
                <h2><img id="img2" src="img/home.png">Accueil</h2>
                <br><br>
                <a href="inscription.php"><h3>Authentification / Inscription</h3></a>
                <br><br>
                <div class="form">
                    <form action="traitementConnexion.php" method="POST">
                        <label for="login">Adresse e-mail :</label>
                        <input type="email" id="login" name="login" required>
                        <br><br>
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" required>
                        <br><br><br>
                       
                        <br>
                        <input type="submit" class="button button1" name="submit" id="Submit" value="SE CONNECTER">
                    </form>
                </div>
                <br><br>
                <a href="motdepasseoublie.php"><h3>Mot de passe oublié</h3></a>
            </div>
            <div class="main">
                <h2>Informations page d'accueil</h2>
            </div>
        </section>

       <?php
            include 'inc/footer.inc';
       ?>
    </body>
</html>