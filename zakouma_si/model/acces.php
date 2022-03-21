<?php
    class Accesss
    {
        protected function connex()
            {
                $serveur="localhost";
                $login="root";
                $pass="";
                // connexion au serveur
                try
                        {
                            $connexion= new PDO("mysql:host=$serveur;dbname=zakouma", $login, $pass);
                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        }
        
                catch(PDOException $e)
                        {
                            echo"echec de la connexion : " . $e->getMessage();
                        }
                        
                return $connexion;
            }
    }
?>