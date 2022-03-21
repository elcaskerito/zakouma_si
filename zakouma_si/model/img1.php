<?php

          $serveur="localhost";
                $login="id15932475_rito";
                $pass="Lcuod^IJQ*4>?H4!";
                // connexion au serveur
                try
                        {
                            $connexion= new PDO("mysql:host=$serveur;dbname=id15932475_ele", $login, $pass);
                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        

                            $selImg=$connexion->prepare('SELECT bin from imagee where id=?');
                            $selImg->setFetchMode(PDO::FETCH_ASSOC);
                            $selImg->execute(array($_GET['id']));
                            $data=$selImg->fetchAll();

                                echo $data[0]['bin'];
                        }
        
                catch(PDOException $e)
                        {
                            echo"echec de la connexion : " . $e->getMessage();
                        }
                    
?>