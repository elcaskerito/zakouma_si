<?php
require_once('model/acces.php');
require_once('model/animal.php');
    class ManagerElevage extends Accesss
        {
            public function AddElement(animal $ani)
                        {
                            $connexion=$this->connex();

                            $add=$connexion->prepare('INSERT into animal (nom,espece_id,race_id,sexe,date_naissance,commentaire) VALUES(:nom,:espece_id,:race_id,:sexe,:naissance,:comment)');

                            $add->bindValue(':nom',$ani->nom());
                            $add->bindValue(':espece_id',$ani->espece_id());
                            $add->bindValue(':race_id',$ani->race_id());
                            $add->bindValue(':sexe',$ani->sexe());
                            $add->bindValue(':naissance',$ani->date_naissance());
                            $add->bindValue(':comment',$ani->commentaire());

                            $add->execute();
                            
                            
                        }
            // public function AddElement($nom,$espece,$race,$sexe,$date_naissance,$comment)
            //             {
            //                 $val=array(
            //                     'nom'=>$nom,
            //                     'espece'=>$espece,
            //                     'race'=>$race,
            //                     'sexe'=>$sexe,
            //                     'naissance'=>$date_naissance,
            //                     'comment'=>$comment
            //                 );

            //                 $connexion=$this->connex();
            //                 $add=$connexion->prepare('INSERT into animal (nom,espece_id,race_id,sexe,date_naissance,commentaire) VALUES(:nom,:espece,:race,:sexe,:naissance,:comment)');
            //                 $add->execute($val);
            //                 return $add;
            //             }
            public function setDataImg($name, $size, $type,$tmp_name)
                        {
                            $connexion=$this->connex();
                            $imgprofil = $connexion->prepare('INSERT into imagee(nom,taille,tipe,bin) VALUES(?,?,?,?)');
                            $imgprofil->execute(array($name, $size, $type, file_get_contents($tmp_name)));
                            return $imgprofil;
                        }
            public function SelectAll()
                        {
                            $animale=[];
                            
                            $connexion=$this->connex();
                            $sele=$connexion->query('SELECT animal.id as id,animal.nom as Nom, animal.date_naissance as date_naissance, animal.commentaire as commentaire, espece.nom_courant as Espece_id, race.nom as Race_id from animal inner join espece on animal.espece_id=espece.id inner join race on animal.race_id=race.id order by animal.date_naissance');
                                    while($data=$sele->fetch())
                                            {
                                                $animale[]= $ani = new animal($data);
                                                
                                            }
                            
                            return $animale;
                        }
                        // public function SelectImg()
            //             {
                //                 $connexion=$this->connex();
            //                 $selImg=$connexion->query('SELECT * from imagee');
            //                 $selImg->setFetchMode(PDO::FETCH_ASSOC);
            //                 $data=$selImg->fetchAll();
            //                 return $data;                        
            //             }
            public function SelectImg()
                        {
                            $connexion=$this->connex();
                            $selImg=$connexion->query('SELECT * from img');
                            
                            
                            return $selImg;                        
                        }
            public function SelecCric($espece,$sexe)
                        {
                            $sql=array(
                                'es'=>$espece,
                                'se'=>$sexe
                            );
                            $aniTab=[];

                            $connexion=$this->connex();
                            $sces=$connexion->prepare('SELECT animal.id as id,animal.nom as Nom, animal.date_naissance as date_naissance, animal.commentaire as commentaire, espece.nom_courant as Espece_id, race.nom as Race_id from animal inner join espece on animal.espece_id=espece.id inner join race on animal.race_id=race.id where animal.espece_id=:es AND animal.sexe=:se order by animal.date_naissance');

                            $sces->execute($sql);

                                while($do=$sces->fetch())
                                    {
                                        $aniTab[]=$animal=new animal($do) ;
                                    }
                                return $aniTab;
                        }
            public function SelecCricA($espece,$sexe,$date)
                        {
                            $sql=array(
                                'es'=>$espece,
                                'se'=>$sexe,
                                'datee'=>$date
                            );
                            $ani=[];
                            $connexion=$this->connex();
                            $sces=$connexion->prepare('SELECT animal.id as id,animal.nom as Nom, animal.date_naissance as date_naissance, animal.commentaire as commentaire, espece.nom_courant as Espece_id, race.nom as Race_id from animal inner join espece on animal.espece_id=espece.id inner join race on animal.race_id=race.id where animal.date_naissance >= :datee AND animal.espece_id=:es AND animal.sexe=:se order by animal.date_naissance');
                            $sces->execute($sql);
                            while($data=$sces->fetch())
                            {
                                $ani[]=$an=new animal($data);

                            }
                            
                            return  $ani;
                        }
            public function SelecCricA2($espece,$sexe,$date)
                        {
                            $sql=array(
                                'es'=>$espece,
                                'se'=>$sexe,
                                'datee'=>$date
                            );
                            $ani=[];
                            $connexion=$this->connex();
                            $sces=$connexion->prepare('SELECT animal.id as id,animal.nom as Nom, animal.date_naissance as date_naissance, animal.commentaire as commentaire, espece.nom_courant as Espece_id, race.nom as Race_id from animal inner join espece on animal.espece_id=espece.id inner join race on animal.race_id=race.id where animal.date_naissance <= :datee and animal.espece_id=:es AND animal.sexe=:se order by animal.date_naissance');
                            $sces->execute($sql);
                            while($data=$sces->fetch())
                            {
                                $ani[]=$an=new animal($data);

                            }
                            
                            return  $ani;
                        }
            public function SelecCricA3($espece,$sexe,$date)
                        {
                            $sql=array(
                                'es'=>$espece,
                                'se'=>$sexe,
                                'datee'=>$date
                            );
                            $ani=[];
                            $connexion=$this->connex();
                            $sces=$connexion->prepare('SELECT animal.id as id,animal.nom as Nom, animal.date_naissance as date_naissance, animal.commentaire as commentaire, espece.nom_courant as Espece_id, race.nom as Race_id from animal inner join espece on animal.espece_id=espece.id inner join race on animal.race_id=race.id where animal.date_naissance = :datee and animal.espece_id=:es AND animal.sexe=:se order by animal.date_naissance');
                            $sces->execute($sql);
                            while($data=$sces->fetch())
                            {
                                $ani[]=$an=new animal($data);

                            }
                            
                            return  $ani;
                        }
            public function plusInfo($id)
                        {
                            
                            
                            $connexion=$this->connex();
                            $sces=$connexion->prepare('SELECT animal.id as id, animal.nom as nom, animal.sexe as sexe, animal.date_naissance as date_naissance, animal.commentaire as commentaire, espece.nom_courant as espece_id, espece.nom_latin as espece_id2, espece.description as descriptionEspece, race.nom as race_id, race.description as descriptionRace from animal inner join espece on animal.espece_id=espece.id inner join race on animal.race_id=race.id where animal.id=? order by animal.date_naissance');
                            $sces->execute(array($id));
                            $data=$sces->fetch();
                            return new animal($data);
                        }
                        // public function plusInfoImg($id)
                        //             {
                            //                 $sql=array(
                                //                     'es'=>$id
                                //                 );
                                
                                //                 $connexion=$this->connex();
                                //                 $sces=$connexion->prepare('SELECT * from imagee where id=:es limit 1');
                                //                 $sces->execute($sql);
                                //                 return $sces;
                                //             }
                                
            public function search($nom)
                                {
                                    $ani=[];

                                    $connexion=$this->connex();
                                $se=$connexion->query('SELECT animal.id as id, animal.nom as nom, animal.sexe as sexe, animal.date_naissance as date_naissance, animal.commentaire as commentaire, espece.nom_courant as espece_id, espece.nom_latin as espece_id2, espece.description as descriptionEspece, race.nom as race_id, race.description as descriptionRace from animal inner join espece on animal.espece_id=espece.id inner join race on animal.race_id=race.id where animal.nom like "%'. $nom .'%"');
                                while($data=$se->fetch())
                                    {
                                        $ani[]=$animal=new animal($data);
                                    }
                                return $ani;
                            }
                            
            public function DelEn1($idsup)
                            {
                                $connexion=$this->connex();
                                
                                $sup = $connexion->prepare('DELETE from animal WHERE id=:ids limit 1');
                                
                                $sup->bindValue(':ids', $idsup, PDO::PARAM_INT);
                            
                                $veri = $sup->execute();

                                return $veri;
                            }
            public function DelEn2($idsup)
                            {
                                     
                                $connexion=$this->connex();
                                $sup = $connexion->prepare('DELETE from imagee WHERE id=:ids limit 1');
                                $sup->setFetchMode(PDO::FETCH_ASSOC);
                                $sup->bindValue(':ids', $idsup, PDO::PARAM_INT);
                                $veri = $sup->execute();
                                
                                return $veri;
                                
                            }
            public function UpdatElt(animal $ani)
                            {
                                
                                $connexion=$this->connex();
                                $add=$connexion->prepare('UPDATE  animal SET nom=:nom,espece_id=:espece_id,sexe=:sexe,date_naissance=:date_naissance,commentaire=:commentaire where id='.$ani->id());
                                $add->bindValue(':nom',$ani->nom());
                                $add->bindValue(':espece_id',$ani->espece_id());
                                $add->bindValue(':sexe',$ani->sexe());
                                $add->bindValue(':date_naissance',$ani->date_naissance());
                                $add->bindValue(':commentaire',$ani->commentaire());
                                
                                
                                $add->execute();

                                return $add;
                                    
                                }
        public function UpdatImg($idup,$name, $size, $type,$tmp_name)
                            {
                                $connexion=$this->connex();
                                $imgprofil = $connexion->prepare('UPDATE imagee SET nom=?,taille=?,tipe=?,bin=? where id=?');
                                $imgprofil->execute(array($name, $size, $type, file_get_contents($tmp_name),$idup));
                                return $imgprofil;
                            }
        }
        ?>