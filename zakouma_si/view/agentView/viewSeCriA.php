<?php
    $indication="selection par critere AVANCER";
    $res="res";
    $zoneIndica="zoneIndica";
    ob_start();
    
?>

<div class="p-3 mb-2 bg-secondary text-white">
                                        
                                  
                                        

                                        
                <?php
                   foreach($SeEsSe as $key=>$value)
                        {
                            $SeEsSe=$value;
                        ?>
                        
                           
                                    <p id="p">
                                
                                    NOm : <?=$SeEsSe->nom()?><br>
                                    ESPECE : <?=$SeEsSe->espece_id()?><br>
                                    <!-- SEXE : <?=$SeEsSe->sexe()?><br>
                                    COMMENTAIRE : <?=$SeEsSe->commentaire()?><br>
                                    DATE DE NAISSANCE : <?=$SeEsSe->date_naissance()?> -->
                                   
                            </p>
                            <div class="info">
                        <a class="btn btn-info" href="index.php?idAn=<?=$SeEsSe->id()?>">Voir plus d'information</a>
                                   
                                    <a class="btn btn-success" href="index.php?action=up&id=<?=$SeEsSe->id()?>">Mettre a jour</a>
                                   
                                    <!-- <a class="btn btn-danger" href="index.php?sup=<?=$SeEsSe->id()?>">Suprimer l'animal</a> -->
                                    
                            </div>    
                            <div class="sepa">
                                    <!-- <img src="public/img/imgSepa.png" alt="separation de resulta" width="900px"> -->
                            <hr>
                                </div>
                                <br>

                <?php
                       
                        }

                ?>
      </div>  
<?php
$content=ob_get_clean();
    require('view/templateResA.php');
?>
