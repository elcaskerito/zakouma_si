<?php
    $indication="selection par critere AVANCER";
    $res="res";
    $zoneIndica="zoneIndica";
    $title="avancer";
    ob_start();
    ?>
    <div class="p-3 mb-2 bg-danger text-white">
        <h3>AUCUN RESULTAT POUR LE MOMENT</h3>
    </div>
<?php

    $content=ob_get_clean();
    require('view/templateResA.php');
?>