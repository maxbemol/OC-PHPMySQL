<?php
        //Connexion à la BD
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'test', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exeption $e)
            {
                die('Erreur: ' . $e->getMessage());
            }    
        ?>