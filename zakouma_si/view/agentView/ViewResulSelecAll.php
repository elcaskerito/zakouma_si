<?php
    $indication="Tous vos animaux enregistré";
    $res="res";
    $zoneIndica="zoneIndica";
    $title="tous les animaux";
    // require('view/templateRes.php');
    error_reporting(0);
    
    ob_start();
?>


                        <?php

                        $lenght=count($rel);
                        ?>
                        <div class="p-3 mb-2 bg-info text-white">
                            <h3>nombre total des animaux est de : <?=$lenght?></h3>
                        </div>
                        <br>
                        <br>
<div class="p-3 mb-2 bg-warning text-dark">               
                <?php
            
        foreach($rel as $key=>$value)
                {
                    $animal=$value;
                    // echo $lenght;
                    // echo"<pre>";
                    // print_r($ani);
                    // echo"</pre>";
                    ?>
                    

                    <p id="p">
                                    NOM : <?=$animal->nom()?><br>
                                    ESPECE : <?=$animal->espece_id()?><br>
                                    RACE : <?=$animal->race_id()?><br>

                                    
                                    
                                   
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