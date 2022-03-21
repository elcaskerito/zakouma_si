<?php
    $indication="selection par critere AVANCER";
    $res="res";
    $zoneIndica="zoneIndica";
    ob_start();
    ?>
    <div class="res">
<div class="alert alert-success " id="closeBtnRight" role="alert">
            <div class="closeBtnRight1">
                <a href="index.php?action=actualiz"><button type="button" class="btn-close"  aria-label="Close"></button></a>
            </div>
        <h4 class="alert-heading">AUCUN RESULTAT TROUVER POUR VOTRE RECHERCHE</h4>
        <p>PLUSIEURS RAISON PEUVENT ETRE A LA CAUSE DE CELA : verifier bien l'orthographe du nom de l'animal, et ressayer si l'erreur persiste contacter votre ingenieur logiciel au (+235) 66 80 95 04 ou E-mail : imahamat633@gmail.com</p>
        <hr>
        <p class="mb-0">Noté que la recherche se fait uniquement sur le nom de l'animal! </p>
    </div>
    </div>
<?php

    $content=ob_get_clean();
    require('view/templateResA.php');
?>