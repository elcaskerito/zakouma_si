<?php
$indication="INFORMATION INDIVIDUEL";
$title="voire le profile";
ob_start();
?>
            <div class="p-3 mb-2 bg-secondary text-white">
                
                     <!-- <a href="model/img1.php?id=2"> afficher photo</a> -->
                     <div class="tof">
                     <img src="model/img1.php?id=<?=$ani->id()?>" alt="image de l'animal" class="rounded float-right" width="300px" height="400px">
                     </div>
                         <p id="p">
                      
                                 NOm : <?=$ani->nom()?><br>
                                 ESPECE : <?=$ani->espece_id()?><br>
                                 NOM LATIN : <?=$ani->espece_id2()?><br>
                                 DATE DE NAISSANCE : <?=$ani->date_naissance()?><br>
                                 A PROPOS DE L'ESPECE : <?=$ani->descriptionEspece()?><br>
                                 RACE : <?=$ani->race_id()?><br>
                                 CONCERNANT LE RACE : <?=$ani->descriptionRace()?><br>
                                 SEXE : <?=$ani->sexe()?><br>
                                 COMMENTAIRE SUR L'ANIMAL : <?=$ani->commentaire()?><br>
                                 <br>
                                
                         </p>
    
                         <div class="info">
                                    <a class="btn btn-info" href="index.php?idAn=<?=$ani->id()?>">Voir plus d'information</a>
                                    
                                    <a class="btn btn-success" href="index.php?action=up&id=<?=$ani->id()?>">Mettre a jour</a>
                                    
                                    <a class="btn btn-danger" href="index.php?sup=<?=$ani->id()?>">Suprimer l'animal</a>
                                    
                                  
                                    </div> 
                
                    </div>

<?php
$content=ob_get_clean();
require('view/templateRes.php');
?>