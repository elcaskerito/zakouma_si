<?php
require_once('acces.php');
    class img extends Accesss
        {
            public function SelectImg($id)
                        {
                        
                            $connexion=$this->connex();
                            $selImg=$connexion->prepare('SELECT bin from imagee where id=?');
                            $selImg->setFetchMode(PDO::FETCH_ASSOC);
                            $selImg->execute(array($id));
                            $data=$selImg->fetchAll();
                            return $data;                        
                        }
            public function plusInfoImg($id)
                        {
                            $sql=array(
                                'es'=>$id
                            );

                            $connexion=$this->connex();
                            $sces=$connexion->prepare('SELECT * from imagee where id=:es limit 1');
                            $sces->execute($sql);
                            return $sces;
                        }
       
        }
?>