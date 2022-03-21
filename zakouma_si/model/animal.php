<?php 
        class animal
                {
//caractéristique de l'animal

                    protected   $_id,
                                $_nom,
                                $_sexe,
                                $_date_naissance,
                                $_commentaire,
                                $_espece_id,
                                $_espece_id2,
                                $_descriptionEspece,
                                $_descriptionRace,
                                $_race_id;


 //constructeur de ma classe

                    public function __construct(array $data)
                                    {
                                        $this->hydrate($data);

                                    }
                                    public function hydrate(array $hydra)
                                                        {
                                                            foreach($hydra as $key=>$value)
                                                                    {
                                                                        $method="set".ucfirst($key);
                                                                            if(method_exists($this,$method))
                                                                                {
                                                                                    $this->$method($value);
                                                                                }
                                                                        
                                                                    }
                                                        }
                    


 //mutateur
                    public function setId($id)
                                    {
                                        $this->_id=$id;
                                    }
                    public function setNom($nom)
                                    {
                                        if(!is_string($nom))
                                                {
                                                    trigger_error("le nom de l'animal ne peut être un chiffre",E_USER_WARNING);

                                                }
                                        $this->_nom=$nom;
                                    }
                    public function setSexe($sexe)
                                    {
                                        if(!isset($sexe))
                                            {
                                                trigger_error('le sexe ne doit pas être vide', E_USER_WARNING);
                                            }
                                        $this->_sexe=$sexe;
                                    }

                    public function setDate_naissance($date)
                                    {
                                        $this->_date_naissance=$date;
                                    }
                    public function setCommentaire($commentaire)
                                    {
                                        $this->_commentaire=$commentaire;

                                    }
                    public function setEspece_id($especeId)
                                    {
                                        // (int)$especeId;

                                        $this->_espece_id=$especeId;
                                    }
                    public function setRace_id($raceId)
                                    {
                                        // (int)$raceId;

                                        $this->_race_id=$raceId;
                                    }
                                   
                    public function setEspece_id2($eslatin)
                                            {
                                                $this->_espece_id2=$eslatin;

                                            }
                                            
                    public function setDescriptionEspece($desEsp)
                                            {
                                                $this->_descriptionEspece=$desEsp;

                                            }
                    public function setdescriptionRace($desRace)
                                            {
                                                $this->_descriptionRace=$desRace;
                                            }
//accesseur
                    public function nom()
                                    {
                                        return $this->_nom;
                                    }
                    public function sexe()
                                    {
                                        return $this->_sexe;
                                    }
                                    
                    public function date_naissance()
                                    {
                                        return $this->_date_naissance;
                                    }
                     public function commentaire()
                                    {
                                        return $this->_commentaire;
                                    }
                     public function espece_id()
                                    {
                                        return $this->_espece_id;
                                    }
                     public function race_id()
                                    {
                                        return $this->_race_id;
                                    }

                    public function id()
                                    {
                                        return $this->_id;
                                    }
                    public function descriptionRace()
                                    {
                                        return $this->_descriptionRace;
                                    }
                    public function descriptionEspece()
                                    {
                                        return $this->_descriptionEspece;

                                    }
                    public function espece_id2()
                                    {
                                        return $this->_espece_id2;
                                    }

                }


?>