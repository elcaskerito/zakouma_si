<?php
    $title="enregistrement reussi";
    ob_start();
?>

    <div class="alert alert-success " id="closeBtnRight" role="alert">
    <a href="index.php?action=actualiz">
        <button type="button" class="close" aria-label="Close">
 
  
             <span aria-hidden="true">&times;</span>
        </button> 
 </a>
        <h4 class="alert-heading">Enregistrement Réussi !</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>

<?php
$content=ob_get_clean();
require('view/template.php');
?>