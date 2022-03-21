<?php
    $indication="selection par critere";
    $res="res";
    $zoneIndica="zoneIndica";
    ob_start();
    
?>

<div class="res">
                                        
                                  
                                        

                                        
                <?php
                // echo"<pre>";
                // print_r($ani);
                // echo"</pre>";
                    foreach($ani as $key=> $value)
                        {
                            $animal=$value;
                        ?>
                        
                           
                                    <p id="p">
                                
                                    NOm : <?=$animal->nom()?><br>
                                    ESPECE : <?=$animal->espece_id()?><br>
                                    <!-- SEXE : <?=$animal->sexe()?><br>
                                    COMMENTAIRE : <?=$animal->commentaire()?><br>
                                    DATE DE NAISSANCE : <?=$animal->date_naissance()?> -->
                                 
                            </p>
                            <div class="info">
                                    <a class="btn btn-info" href="index.php?idAn=<?=$animal->id()?>">Voir plus d'information</a>
                                
                                    <a class="btn btn-success" href="index.php?action=up&id=<?=$animal->id()?>">Mettre a jour</a>
                                    
                                    <!-- <a class="btn btn-danger" href="index.php?sup=<?=$animal->id()?>">Suprimer l'animal</a> -->
                                    
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
    require('view/templateRes.php');
?>
