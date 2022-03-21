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
        <h4 class="alert-heading">votre suppresison a reussi</h4>
        <p>l'animal a été bien retiré de votre base de donné</p>
        <hr>
        <p class="mb-0">votre suppression a ete effectuer avec succès! .</p>
    </div>
    </div>
<?php

    $content=ob_get_clean();
    require('view/templateResA.php');
?>