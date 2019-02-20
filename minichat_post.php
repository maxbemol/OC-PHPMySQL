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

        //Envoi des donnée du formulaire dans la BD
        $envoi_mess = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');

        $envoi_mess->execute(array(
            'pseudo' => $_POST['pseudo'],
            'message' => $_POST['message']
        ));

        //Rediriger vers le minichat
        header('location: minichat.php');
        ?>