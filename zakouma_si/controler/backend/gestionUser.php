<?php
session_start();
    if($pass===$verif[0]['pass'])
        {

            $_SESSION['login']=$email;
            require('view/accueil.php');
        }
    else{
        // echo "erreure ";
        // echo $pass;
        // echo"<pre>";
        // print_r($verif);
        // echo"</pre>";
        // echo $email;
        echo"<h1>votre connexion a échou!!! <br> verifier bien vos informations de connexions puis cliquer</h1><br>";
        ?>
        <script>
            alert("la connexion a échoué au serveur");
        </script>
        <a href="index.php"><h1> ressayer!</h1></a>
        <?php
    }

?>