<?php
$title="enregistrement";
ob_start();
?>
<section class="page-section" id="contact">
    <br>
    <a href="index.php?action=actualiz">
        <button type="button" class="close" aria-label="Close">
 
  
             <span aria-hidden="true">&times;</span>
        </button> 
 </a>
 <div class="p-3 mb-2 bg-success text-white">
            <div class="container">
                <div class="text-center">
                    <h4 class="section-heading text-uppercase">FORMULAIRE D'ENREGISTREMENT</h4>
                    <!-- <h3 class="section-subheading text-muted">DES BESTIOLES</h3> -->
                </div>

                <form method="POST" action="index.php?action=AddEnre" id="contactForm" name="enregistrement"  enctype="multipart/form-data">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <p>nom de l'animal</p>
<input class="form-control" id="name" type="text" name="nom" placeholder="Name *" required="required" data-validation-required-message="Please enter your name." />
                                
                            </div>
                            <div class="form-group">
                            <p>espece</p>
<select class="form-control" name="espece">
    <option value="2">chat</option>
    <option value="1">chien</option>
    <option value="3">tortue</option>
</select>
                        <p>race</p>
<select class="form-control" name="race">
    <option value="2">Berger allemand</option>
    <option value="1">Berger blanc suisse</option>
    <option value="3">Singapura</option>
     <option value="4">Sphynx</option>
</select>

                                
                            </div>
                            <div class="form-group mb-md-0">
                            <p>sexe</p>
<input class="form-control" id="phone" type="text" name="sexe" placeholder="Sexe *" required="required" data-validation-required-message="Please enter your phone number." />
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group mb-md-0">
                            <p>date_de_naissance</p>
<input class="form-control" id="phone" type="date" name="date" placeholder="DATE DE NAISSANCE" required="required" data-validation-required-message="Please enter your phone number." />
                                
                            </div>
                            <div class="form-group mb-md-0">
                            <p>Image d'identité</p>
<input class="form-control" id="phone" type="file" name="img"/>
                            
                            </div>
                            <div class="form-group form-group-textarea mb-md-0">
                            <p class="help-block tex    t-danger">commentaire</p>
<textarea class="form-control" id="message" name="comment" placeholder="Commentaire *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
<input class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" value="Enregistrer l'animal"/>
                    
                    </div>
                </form>
            </div>
 </div>
        </section>
        <?php 
        $content=ob_get_clean();
        require('view/template.php');
        