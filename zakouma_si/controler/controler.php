<?php
session_start();


// require_once('model/ManagerElevage.php');
// require_once('model/ManagerUser.php');
require_once('model/chargeurClass.php');

spl_autoload_register('chargeurClasse');

function demmareurSessio($login){

    return  $_SESSION['login']=$login;
   }

function connexion($email,$pass)
        {
            $login=new ManagerUser();
            $verif=$login->gestionUser($email);
            require('controler/backend/gestionUser.php');

        }
function  enregistrement($name, $size, $type,$tmp_name)
        {
            $enregistrement= new ManagerElevage();
            // $enreElt=$enregistrement->AddElement($nom,$espece,$race,$sexe,$date_naissance,$comment);
            $enreImg=$enregistrement->setDataImg($name,$size,$type,$tmp_name);
                
                if($enreImg===false)
                        {
                            throw new Exception('erreur d\'enregistrement');
                        }
                else
                        {
                            require('view/viewEnreReussi.php');
                           
                        }


        }
function addAnimal($animalData)
                {
                    $animal1= new animal($animalData);
                    $manageElevage=new ManagerElevage();
                    $manageElevage->AddElement($animal1);

                }
function form()
                {
                    require('view/form.php');
                }
function chargUp($id)
        {
            $i=$id;
            require('view/form2.php');
        }
function actua()
        {
            require('view/accueil.php');
        }
function SelectAll()
        {
            $select=new ManagerElevage();
            $rel=$select->SelectAll();
            // $seImg=$select->SelectImg();
            if($_SESSION['login']==="ima@gmail.com")
                {
                     require('view/ViewResulSelecAll.php');
                }
                elseif($_SESSION['login']==="rito@gmail.com")
                {
                    require('view/agentView/ViewResulSelecAll.php');
                }
        }
function avancer()
        {
            require('view/viewpageavancer.php');
        }
function SelectCri($espece,$sexe)
        {
            $selC= new ManagerElevage();
            $ani=$selC->SelecCric($espece,$sexe);
            // echo"<pre>";
            //     print_r($ani);
            //     echo"</pre>";
            // $seImg=$selC->SelectImg();
            if($_SESSION['login']==="ima@gmail.com")
                    {
                        require('view/viewSeCri.php');
                  }

            elseif($_SESSION['login']==="rito@gmail.com")
                  {
                    require('view/agentView/viewSeCri.php');
                  }

        }
function SelectCriA($espece,$sexe,$opera,$date)
        {
            $selC=new ManagerElevage();
            
            if($opera=="sup")
                    {
                    $SeEsSe=$selC->SelecCricA($espece,$sexe,$date);
                        if($_SESSION['login']==="ima@gmail.com")
                                {
                                require('view/viewSeCriA.php');
                                }
                        elseif($_SESSION['login']==="rito@gmail.com")
                            {
                                require('view/agentView/viewSeCriA.php');
                            }
                    }
            elseif($opera=="inf")
                    {
                        $SeEsSe=$selC->SelecCricA2($espece,$sexe,$date);
                            if($_SESSION['login']==="ima@gmail.com")
                                {
                                   require('view/viewSeCriA.php');
                                }
                             elseif($_SESSION['login']==="rito@gmail.com")
                                {
                                    require('view/agentView/viewSeCriA.php');
                                }
                    }
            elseif($opera=="egal")
                    {
                        $SeEsSe=$selC->SelecCricA3($espece,$sexe,$date);
                        if($_SESSION['login']==="ima@gmail.com")
                                {
                                require('view/viewSeCriA.php');
                                }
                        elseif($_SESSION['login']==="rito@gmail.com")
                            {
                                require('view/agentView/viewSeCriA.php');
                            }
                    }
           

        }
function plusInfos($id)
        {
            $plsI=new ManagerElevage();
            $ani=$plsI->plusInfo($id);
            // echo"<pre>";
            //     print_r($ani);
            //     echo"</pre>";
                // $plsImg=new img();
                // $plsImg=$plsImg->plusInfoImg($id);
                if($_SESSION['login']==="ima@gmail.com")
                        {
                            require('view/vieuPlusInfo.php');
                        }
                elseif($_SESSION['login']==="rito@gmail.com")
                        {
                            require('view/agentView/vieuPlusInfoAgent.php');
        
                        }

        }
function search($nom)
            {
                $namsearch=new ManagerElevage();
                $data=$namsearch->search($nom);
              
                if($_SESSION['login']==="ima@gmail.com")
                        {
                            require('view/viewResSearch.php');
                        }
                elseif($_SESSION['login']==="rito@gmail.com")
                {
                    require('view/agentView/viewResSearchAgent.php');

                }
                  
            }
function delec($idsup)
            {
                $sup=new ManagerElevage();
                $supdata=$sup->DelEn1($idsup);
                $supimg=$sup->DelEn2($idsup);
                require('view/viewSuppressionReussi.php');
            }
function uptani($data)
            {
                $animal= new animal($data);
                $upda=new ManagerElevage();
            
                $ani=$upda->UpdatElt($animal);
            }
function updat($idup,$name, $size, $type,$tmp_name)
            {
                $update=new ManagerElevage();
                
                $upimg=$update->UpdatImg($idup,$name, $size, $type,$tmp_name);
                require('view/viewUpdateReussiphp');

            }
function param()
            {
                require('view/param.php');
            }
?>