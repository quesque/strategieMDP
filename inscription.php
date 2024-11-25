<!DOCTYPE html>
<html>
    <head>
        <title>Authentification | Inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
           <script type="text/javascript"> 
                
   
        
        function validation() {
           var msg;
           var lemotdepasse = document.getElementById("password").value;
           var retour;          
     
         
           var regex = /[0-9]/g;
        if (regex.test(lemotdepasse)==false) {
          msg = "<p style='color:green'>Il faut au moins 1 chiffre</p>";
            document.getElementById("messageErreur").innerHTML= msg;
            return false;}
        
          var regex = /[A-Z]/g;
        if (regex.test(lemotdepasse)==false) {
          msg = "<p style='color:green'>Il faut au moins 1 Majuscule</p>";
            document.getElementById("messageErreur").innerHTML= msg;
            return false;}

         
        var regex = /[^a-zA-Z\d]/g;
        if (regex.test(lemotdepasse)==false) {
          msg = "<p style='color:green'>Il faut au moins 1 caractère spécial</p>";
             document.getElementById("messageErreur").innerHTML= msg;
            return false;}
        
         if (lemotdepasse.length<=9) {
          msg = "<p style='color:green'>Il faut au moins 10 caractères</p>";
            document.getElementById("messageErreur").innerHTML= msg;
            return false;}
        
        
        
         return true;
         
        }
    </script> 
    </head>
    <body>
       <?php
       include 'inc/header.inc';
       ?>
        
        <section class="main">
            <h2><img id="img2" src="img/home.png">Authentification / Inscription</h2>
            <br><br><br><br>
            <div class="form">
                <form class="signup" id="signup_form" action="traitementInscription.php" onSubmit="return validation();" method="POST">
                    <label for="login">Adresse email :</label>
                    <input type="email" id="login" name="login" size="30" required>
                    <br><br>
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                    <span id="messageErreur"></span> 
                    <br><br>
                    <label for="confirm_password">Confirmer le mot de passe :</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br><br>
                    <input type="submit" class="button button1" name="submit" id="Submit" value="S'INSCRIRE">
                </form>
    
            </div>
        </section>
        <?php
       include 'inc/footer.inc';
       ?>
        
        
    </body>
</html>