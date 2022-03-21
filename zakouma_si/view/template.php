
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?></title>
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
    <link rel="stylesheet" href="public/css/style2.css">
    <!-- <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script type="javascript" src="public/js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
     <!-- ############################################
                        entête
    ########################################### -->
    <header>
        <div class="navbar navbar-light" style="background-color: #e3f2fd;">
                <h1>TABLEAU DE BORD</h1>
                <br>
                <nav >
                            <div class="search">
                                <form class="form-inline my-2 my-lg-0" method="post" action="index.php?action=se">
                                <input class="form-control me-2" name="se" type="search" placeholder="Search" aria-label="Search">
                                <input class="btn btn-outline-success" type="submit" value="Search"/>
                                </form>
                            </div>
                            </nav>

                <form action="index.php?action=selCriEsSex" method="POST">
                    <label for="espece"> espece : </label>
                    <select class="selecForm" name="espece" id="">
                        <option value="2">chat</option>
                        <option value="1">chien</option>
                        <option value="3">coq</option>
                        <option value="4">boeuf</option>
                    </select>
                    <label for="sexe"> sexe : </label>
                    <select class="selecForm"name="sexe" id="">
                            <option value="M">MASCULIN</option>
                            <option value="F">FEMININ</option>
                    </select>
                    <!-- <input class="selecForm" type="date" name="date"> -->
                    <input class="btn btn-primary" type="submit" value="valider">
                </form>
                        <div class="logo">

                         </div>
        </div>
    </header>
    <hr>
    <h3>Bienvenue a l'ACCUEIL de l'application de gestion de Parc Zakouma</h3>
    <!-- ############################################
                        contenue
    ########################################### -->
    
               
    <div class="contenu">
                        <div class="search">
                            <!-- <nav class="navbar navbar-light bg-light">
                            <div class="search">
                                <form class="d-flex" method="post" action="index.php?action=se">
                                <input class="form-control me-2" name="se" type="search" placeholder="Search" aria-label="Search">
                                <input class="btn btn-outline-success" type="submit" value="Search"/>
                                </form>
                            </div>
                            </nav> -->
                            <br>
                            
                            <div class="actualiz">
                            <!-- <a class="btn btn-dark" href="index.php?action=actualiz">ACTUALISER</a> -->
                            </div>
                        </div>


                        <!-- ################################### -->
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
 
    <div class="bg-dark p-4">
    <h4 class="text-white">Fonctionnalité</h4>
    <?php
        echo $_SESSION['login'];
    ?>
    <br>
      <h4 class="text-white"><a class="btn btn-success" href="index.php?action=enre">ENREGISTRER</a></h4>
      <hr>
                              
                                    <a class="btn btn-info" href="index.php?action=SelAll">VOIR TOUS LES ANIMAUX</a>
                                   
                                    <hr>
                                   
                                    <a class="btn btn-info" href="index.php?action=avancer">AVANCER</a>
                                    
                                  
                                    <hr>
                                    <a class="btn btn-info" href="index.php?action=param">PARAMETRE</a>
                                    
                                  
                                    <hr>
                                  
                                    <a class="btn btn-danger" href="index.php">DECONNEXION</a>
    </div>
  </div>
  <h4>Menu</h4>
  <nav class="navbar navbar-dark bg-dark">
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

    <div class="container-fluid">
    
    <?=$content?>
    </div>

    
                        
   
   
 
</div>   
   
<footer>
        <hr>
            
                <div class="foot1">
                        <p>
                            <center>
                            copyright @RitoDev <strong>Description</strong> :une petite application de gestion d'elevage 
                            </center>
                        </p>
                </div>
            
        </footer> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>