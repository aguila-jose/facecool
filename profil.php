﻿<?php
require ('connexion.php');

    // recupere coonnexion.php
        
//TEST
        // Je cree ma connexion
        $appliDB = new Connexion();

        $id = null;
        if(!empty($_GET["id"])){

            $id = $_GET["id"];
        }


      $recupereAffiche = $appliDB->selectPersonneById($id);


?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>facecool</title>
    <meta name="description" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="javascript/javascript.js"></script>
    <script src="javascript/jquery-1.6.3.min.js"></script>
</head>

<body>
  
   

    <nav>
        <div id="menu-secondaire">
            <a href="index.html">FACECOOL</a>
            <form method="GET" action="annuaire.php">
                <div>
                    <input type="search" id="search" name="recherche" placeholder="Trouver vos amis">
                </div>
                <button>search</button>
            </form>
        </div>
        <!--<div id="toggle-menu">Menu</div>-->
        <ul class="menu">

            <!--<li><a href="#">FACECOOL</a></li>-->
            <!--<li><a href="#">ANNUAIRE</a></li>-->
            <li><a href="creerprofil.html">CREER NOUVEAUX PROFIL</a></li>
            <li><a href="annuaire.html">LIST DES AMIS ANNUAIRE</a></li>

        </ul>
    </nav>

    <!--sectio profil-->

    <?php
       

       

    
        

        /* $mesHobby = $connexion->selectHobbById(); */

       

    ?>
    <section class="container-profil">

        <div class="bck-img">
            <div class="container-img">
                <img src="imgs/amis1.png" alt="">
            </div>


            <div class="appelle border">NOM :
                 <?php echo $recupereAffiche->Nom ?>
            </div>

            <div class="appelle border">PRENOM
                <?php echo $recupereAffiche->Prenom ?> 
            </div>

            <div class="appelle border">DATE NAISSANCE :
                <?php echo $recupereAffiche->Date_Naissance ?>
            </div>

            <div class="appelle border">STATUS-SOCIAL
              <?php echo $recupereAffiche->Status_couple ?> 
            </div>

        </div>

        <div class="donnes-perso">
            <div class="date-status">
                <div class="appelle">
                    <p>MUSIQUES PRÉFÉRÉES :</p>
                    <div class="flex_container">

                            <p>rock</p>
                            <p>tecno</p>
                            <p>Jazz</p>
                            <p>classic</p>
                    </div>
                    
                    <!-- <?php echo $personne->Nom ?>-->
                </div>
            </div>
            <div class="date-status">
                <div class="appelle">
                    <p>HOBBY PRÉFÉRÉ</P>
                        <div class="flex_container">

                                <p>velo</p>
                                <p>Cinema</p>
                                <p>lire</p>
                                <p>shoping</p>
                        </div>


                    <!--:<?php echo $personne->Prenom ?> -->
                </div>

                <div>







                </div>
    </section>
</body>

</html>