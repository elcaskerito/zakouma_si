<?php
require_once('model/acces.php');
    class img extends Accesss
        {
            
            public function SelectImg()
                        {
                            $connexion=$this->connex();
                            $selImg=$connexion->query('SELECT * from imagee');
                            $selImg->setFetchMode(PDO::FETCH_ASSOC);
                            $data=$selImg->fetchAll();
                            return $data;                        
                        }
                        

        }
?>