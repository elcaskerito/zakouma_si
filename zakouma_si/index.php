<?php

error_reporting(0);

require('controler/controler.php');
        if($_GET['action']==1)
                            {
                               
                                connexion($_POST['mail'],$_POST['pass']);
                                demmareurSessio($_POST['mail']);
                            }
        
                elseif($_GET['action']=="AddEnre")
                            {
                                $animal=array(
                                    'Nom'=>$_POST['nom'],
                                    'Sexe'=>$_POST['sexe'],
                                    'Date_naissance'=>$_POST['date'],
                                    'Commentaire'=>$_POST['comment'],
                                    'Espece_id'=>$_POST['espece'],
                                    'Race_id'=>$_POST['race']
                                );

                                

                                enregistrement($_FILES['img']['name'],$_FILES['img']['size'],$_FILES['img']['type'],$_FILES['img']['tmp_name']);

                                addAnimal($animal);
                            }
                            
                elseif($_GET['action']=="enre")
                            {
                                form();
                            }
                elseif($_GET['action']=="actualiz")
                            {
                                actua();
                            }
                elseif($_GET['action']=="SelAll")
                            {
                                SelectAll();
                            }
                elseif($_GET['action']=="param")
                            {
                                param();
                            }
                elseif($_GET['action']=="selCriEsSex")
                            {
                                SelectCri($_POST['espece'],$_POST['sexe']);
                            }
                elseif($_GET['action']=="avancer")
                            {
                                avancer();
                                
                            }
                elseif($_GET['action']=="avancer2")
                            {
                                require('view/viewpageavancerok.php');
                            }
                elseif($_GET['action']=="criavancer")
                            {
                                SelectCriA($_POST['espece'],$_POST['sexe'],$_POST['operateur'],$_POST['date']);
                            }
                elseif($_GET['action']=="se")
                            {
                               search($_POST['se']);
                            }
                elseif(isset($_GET['sup']) && $_GET['sup']>0)
                            {
                                delec($_GET['sup']);
                            }
                elseif($_GET['action']=="up" && $_GET['id']>0)
                            {
                                chargUp($_GET['id']);
                            }
                elseif($_GET['action']=="misajr")
                            {
                                $animal=array(
                                    'Id'=>$_POST['idup'],
                                    'Nom'=>$_POST['nom'],
                                    'Sexe'=>$_POST['sexe'],
                                    'Date_naissance'=>$_POST['date'],
                                    'Commentaire'=>$_POST['comment'],
                                    'Espece_id'=>$_POST['espece'],
                                    'Race_id'=>$_POST['race']
                                );
                            uptani($animal);

                                updat($_POST['idup'],$_FILES['img']['name'],$_FILES['img']['size'],$_FILES['img']['type'],$_FILES['img']['tmp_name']);
                            }
                
                elseif(isset($_GET['idAn']) && $_GET['idAn']>0 )
                            {
                                plusInfos($_GET['idAn']);
                            }
        else{

        require('public/theme/index.php');

        }
?>