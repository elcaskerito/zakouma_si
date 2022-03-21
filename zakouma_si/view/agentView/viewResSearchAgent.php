<?php
$indication="RESULTAT DE RECHERCHE";
$title="resultat de recherche";
ob_start();
?>
<div class="p-3 mb-2 bg-dark text-white">               

        <?php
        $tail=count($data);
            if($tail>0)
                {
                foreach($data as $key=>$value)
                    {
                        $datase=$value;
                    ?>
        <!-- <a href="model/img1.php?id=2"> afficher photo</a> -->
        
            <p id="p">
                    NOm : <?=$datase->nom()?><br>
                    ESPECE : <?=$datase->espece_id()?><br>
                    <!-- SEXE : <?=$datase->sexe()?><br>
                    COMMENTAIRE : <?=$datase->commentaire()?><br>
                    DATE DE NAISSANCE : <?=$datase->date_naissance()?> -->
                    
                   
            </p>
            <div class="info">
                                    <a class="btn btn-info" href="index.php?idAn=<?=$datase->id()?>">Voir plus d'information</a>
                                    
                                    <a class="btn btn-success" href="index.php?action=up&id=<?=$datase->id()?>">Mettre a jour</a>
                                    
                                    <!-- <a class="btn btn-danger" href="index.php?sup=<?=$datase->id()?>">Suprimer l'animal</a> -->
                                    
        </div>  
            
            <div class="sepa">
                    <!-- <img src="public/img/imgSepa.png" alt="separation de resulta" width="900px"> -->
            <hr>
                </div>
                <br>

            <?php
                
                    }
                }
                else
                {?>
                <div class="alert alert-success " id="closeBtnRight" role="alert">
                <a href="index.php?action=actualiz">
        <button type="button" class="close" aria-label="Close">
 
  
             <span aria-hidden="true">&times;</span>
        </button> 
 </a>
                    <h4 class="alert-heading">AUCUN RESULTAT TROUVER POUR VOTRE RECHERCHE</h4>
                    <p>PLUSIEURS RAISON PEUVENT ETRE A LA CAUSE DE CELA : verifier bien l'orthographe du nom de l'animal, et ressayer si l'erreur persiste contacter votre ingenieur logiciel au (+235) 66 80 95 04 ou E-mail : imahamat633@gmail.com</p>
                    <hr>
                    <p class="mb-0">Noter que la recherche se fait uniquement sur le nom de l'animal! </p>
                </div>

            <?php   
            }
            ?>
            
</div>


<?php
$content=ob_get_clean();
require('view/templateRes.php');
?>