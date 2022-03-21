<?php
    require_once('model/acces.php');
    class ManagerUser extends Accesss
        {
            public function gestionUser($email)
                {
                    $connexion= $this->connex();
                    $gest=$connexion->query("SELECT * FROM user where email='$email'");
                    $res=$gest->fetchAll();
                    return $res;
                }

        }

?>