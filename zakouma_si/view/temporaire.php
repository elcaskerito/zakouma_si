for($i=0; $i<=$lenght;$i++)
                        {
                    
                        ?>
                        <!-- <a href="model/img1.php?id=2"> afficher photo</a> -->
                        <div class="info">
                                    <a class="btn btn-info" href="index.php?idAn=<?=$rel[$i]->id()?>">Voir plus d'information</a>
                                    <br>
                                    <br>
                                    <a class="btn btn-success" href="index.php?action=up&id=<?=$rel[$i]->id()?>">Mettre a jour</a>
                                    <br>
                                    <br>
                                    <a class="btn btn-danger" href="index.php?sup=<?=$rel[$i]->id()?>">Suprimer l'animal</a>
                                    <br>
                                  
                                    </div>   
                            <p id="p">
                                    NOM : <?=$rel[$i]->nom()?><br>
                                    ESPECE : <?=$rel[$i]->espece_id()?><br>
                                    RACE : <?=$rel[$i]->race_id()?><br>

                                    <br>
                                    <br>
                                    <br>
                                    
                                   
                            </p>
                            
                            <div class="sepa">
                                    <!-- <img src="public/img/imgSepa.png" alt="separation de resulta" width="900px"> -->
                            <hr>
                                </div>
                                <br>