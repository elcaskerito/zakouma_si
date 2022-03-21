<?php
    $indication="selection par critere AVANCER";
    $res="res";
    $zoneIndica="zoneIndica";
    $title="avancer";
    ob_start();
    ?>
    <div class="res">
<div class="alert alert-success " id="closeBtnRight" role="alert">
           
<a href="index.php?action=avancer2">
        <button type="button" class="close" aria-label="Close">
 
  
             <span aria-hidden="true">&times;</span>
        </button> 
 </a>



        <h4 class="alert-heading">INFORMATION POUR LA SELECTION A CRITERE AVANCER</h4>
        <p>pour bien faire la selection a critère avancer veuillez suivre ses étapes : rendez vous au desus du tableau de bord et spécifier vos différents paramettres (criteres) de recherche ensuite cliquer sur le boutton valider</p>
        <hr>
        <p class="mb-0">cette d'application est destiner a faire des recherches de précision .</p>
    </div>
    </div>
<?php

    $content=ob_get_clean();
    require('view/templateResA.php');
?>