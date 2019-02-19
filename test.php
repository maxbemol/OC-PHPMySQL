<!DOCTYPE html>
<html>

<head>
    <title>Notre première instruction : echo</title>
    <meta charset="utf-8" />
</head>

<body>

    <?php
        /* Création des variables */
        
        $age_du_visiteur = 17;
        $calcule = (1+9)*10;
        $age = 8;
        $langue = "francais";
        $note = 12;
        
        ?>

        <h2>Affichage de texte avec PHP</h2>

        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <?php //commentaire une ligne
                echo "Celle-ci a été écrite entièrement en PHP."; 
            ?><br /> Aujourd'hui nous sommes le
            <?php 
                echo date('d/m/Y h:i:s'); /* commentaire multi ligne*/
            ?>.<br />
            <?php
                echo "Le visiteur a $age_du_visiteur ans.";
            ?> <br />
            <?php
                echo 'Le visiteur a ' . $age_du_visiteur . 'ans.';
            ?> <br />
             <?php
                echo $calcule;
            ?> <br />
                        
        </p>

        <h2>Conditionnel</h2>        
    
        <p>

            <?php
                if ($age <=12 AND $langue == "francais")
                {
                    echo "Salut le jeune !<br />";
                    $autorisation_entrer = "Oui";
                }
                elseif ($age <=12 AND $langue == "anglais")
                {
                    echo "Hi guys !<br />";
                    $autorisation_entrer = "Oui";
                }
                elseif ($age >12 AND $langue == "francais")
                {
                    echo "Tu es trop vieu, dégage !<br />";
                    $autorisation_entrer = "Non";
                }
                elseif ($age >12 AND $langue == "anglais")
                {
                    echo "You're too old, go away !<br />";
                    $autorisation_entrer = "Non";
                }
            
                echo 'Avez-vous l\'autorisation d\'entrer ? La réponse est: ' . $autorisation_entrer;
            ?>
            <br /><br />
            
            <?php
                switch ($note)
                {
                    case 0:
                        echo "Tu es vraiment nul !!!";
                    break;
                        
                    case 5:
                        echo "Tu es très mauvais";
                    break;
                        
                    case 7:
                        echo "Tu es mauvais";
                    break;
                        
                    case 10:
                        echo "Tu as la moyenne";
                    break;
                        
                    case 12:
                        echo "Tu es assez bon";
                    break;
                        
                    case 16:
                        echo "Tu te débrouille bien";
                    break;
                        
                    case 20:
                        echo "Excellent travail";
                    break;
                        
                    default:
                        echo "Désolé je n'ai pas de message à afficher";
                }
            ?>
            
        </p>
    
        <h2>Boucles</h2>
    
        <p>
    
        <?php
          //Variables boucle
          $nombre_de_ligneW = 1;  
        ?>
            
        <?php
            echo "<strong>Boucle While:</strong> <br />";
            while ($nombre_de_ligneW <= 5)
            {
                echo 'Ceci est la ligne #' . $nombre_de_ligneW . '<br />';
                $nombre_de_ligneW ++;
            }
        ?>
        <br />
            
        <?php
            echo "<strong>Boucle For:</strong><br />";
            for ($nombre_de_ligneF = 1; $nombre_de_ligneF <=5; $nombre_de_ligneF++)
            {
                echo 'Ceci est la ligne #' . $nombre_de_ligneF . '<br />';
            }
        ?>
        </p>
    
        <h2>Tableau</h2>
        <p>
    
        <?php
          //Variable Array
            $prenom = array ('Annie', 'Nathan', 'Ely-Ann', 'Laurence');  
        
        /*  $prenom[0] = 'Annie';
            $prenom[1] = 'Nathan';
            
            $prenom[] = 'Annie';
            $prenom[] = 'Nathan';
        */
            
        //Array associatif
            $coordonnee['prenom'] = 'Annie';
            $coordonnee['nom'] = 'Gagnon';
            $coordonnee['adresse'] = '65 Bertrand';
            $coordonnee['ville'] = 'St-Lin';
        ?>
            
        <?php
            echo $prenom[1] . '<br />';
            echo $coordonnee['ville'] . '<br />';
        ?>
            
        <?php
            for ($numero = 0; $numero < 6; $numero++)
            {
              echo $prenom[$numero] . '<br />';
            }
            
            foreach($prenom as $elementP)
            {
                echo $elementP . '<br />';
            }
            
            foreach($coordonnee as $elementC)
            {
                echo $elementC . '<br />';
            }
            
            foreach($coordonnee as $cleC => $elementC)
            {
                echo '[' . $cleC . '] vaut ' . $elementC . '<br />';
            }
            
            echo '<pre>';
            print_r($coordonnee);
            echo '</pre>';
        ?>
            
        <?php
            if(array_key_exists('nom', $coordonnee))
            {
                echo 'La clé "nom" existe<br />';
            }
            else
            {
                echo 'La clé "nom" n\'existe pas<br />';
            }
            
            if(array_key_exists('pays', $coordonnee))
            {
                echo 'La clé "pays" existe<br />';
            }
            else
            {
                echo 'La clé "pays" n\'existe pas<br />';
            }
//-------------------------------------------------------------------            
            if(in_array('Ely-Ann', $prenom))
            {
                echo 'La valeur "Ely-Ann" existe<br />';
            }
            else
            {
                echo 'La valeur "Ely-Ann" n\'existe pas<br />';
            }
            
            if(in_array('Claude', $prenom))
            {
                echo 'La valeur "Claude" existe<br />';
            }
            else
            {
                echo 'La valeur "Claude" n\'existe pas<br />';
            }
//--------------------------------------------------------------------
            $positionP = array_search('Annie', $prenom);
            echo '"Annie" est en position: ' . $positionP . '<br />';
            
            $positionC = array_search('St-Lin', $coordonnee);
            echo '"St-Lin" est en position: ' . $positionC .'<br />';
        ?>            
        </p>
    
        <h2>Les Fonctions</h2>
        <p>
        <?php
            $phrase = 'Allo TOUT le monde voici UN phrase avec plus de mots, encore!';
            $longueurP = strlen($phrase);
            echo 'La phrase ci-dessous comporte: '. $longueurP . ' caractère:<br />'. $phrase . '<br />';
            
            $lettre_remplacer = str_replace('e', 'Z', $phrase);
            echo $lettre_remplacer . '<br />';
            
            $lettre_melanger = str_shuffle($phrase);
            echo $lettre_melanger . '<br />';
            
            $lettre_minuscule = strtolower($phrase);
            echo $lettre_minuscule . '<br />';
            
            $lettre_majuscule = strtoupper($phrase);
            echo $lettre_majuscule . '<br />';
            
            $jour = date('d');
            $mois = date('m');
            $annee = date('Y');
            $heure = date('H');
            $minute = date('i');
            echo 'Nous sommes le: ' . $jour . '/' . $mois . '/' . $annee . ' et il est: ' . $heure . ':' . $minute . '<br />';
            
            function DireBonjour($nom)
            {
                echo 'Bonjour ' . $nom . ' !<br />';
            }
            
            DireBonjour('MaX');
        ?> 
        </p>
    <?php
//-----------------------------------------------------------------------
    ?>
        <h2> Inclusion d'autre page</h2>
    
        <p>
            <?php include("inclus.php"); ?>
        </p>
    
    <?php
//---------------------------------------------------------------------------
    ?>
    
    <h2>Transmission de donnée par URL</h2>
    
    <?php
    //Création de variable pour transmission URL
    $nomURL = 'Verville';
    $prenomURL = 'Maxime';
    $repeteURL = 14;
    ?>
    
    <p>
        <a href="bonjour.php?nom=<?php echo $nomURL; ?>&amp;prenom=<?php echo $prenomURL; ?>&amp;repete=<?php echo $repeteURL; ?>">BONJOUR</a><br />
    </p>
 
<?php
//------------------------------------------------------------------------------    
?>
    
    <h2>Transmission de donnée par formulaire</h2>
    
    <form method="post" action="cible.php">
    
    <p>
        <input type="text" name="nomPOST" />
        <input type="submit" value="Envoyer" />
    </p>
    
    </form>
    
<?php
//--------------------------------------------------------------------------------    
?>
    
    <h2>Envoi d'un fichier par formulaire</h2>
    
    <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>Formulaire d'envoi de fichier:<br />
        <input type="file" name="monfichier" /><br />
        <input type="submit" value="Envoyer le fichier" />
        </p>
    </form>
    
<?php
//--------------------------------------------------------------------------------    
?>
    
    <h2>Session & Cookie</h2>
    
<?php
    /* La fonction devrais être au tout début de la page, avant le !DOCTYPE
        Première page, on créer les variable, sur les autres, on fait juste utiliser la fonction
        
    session_start();
    
    $_SESSION['variable'] = 'valeur';
    
    session_destroy();
    
    ------------------------------------------------------------------------------
    
    setcookie('nom', 'valeur', time() + 365*24*3600, null, null, false, true);
    */
?>
    
<?php
//--------------------------------------------------------------------------------    
?>
    
    <h2>Lire et écrire dans un fichier</h2>
    
    <?php
    $monfichier = fopen('src/compteur.txt', 'r+');
    
    $page_vues = fgets($monfichier);
    $page_vues += 1;
    fseek($monfichier, 0);
    fputs($monfichier, $page_vues);
    
    fclose($monfichier);
    
    echo 'Cette page à été vue ' . $page_vues . ' fois !';
    ?>
    
<?php
//--------------------------------------------------------------------------------    
?>
   
    <h2>Connection à la base de donnée</h2>
    
<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'test', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exeption $e)
    {
        die('Erreur: ' . $e->getMessage());
    }
    
?>
    
<?php
//--------------------------------------------------------------------------------    
?>
    
    <h2>Récupérer des entrés</h2>
    
<?php
  $reponse = $bdd->query('SELECT * FROM jeux_video');  
    
    while ($donnees = $reponse->fetch())
    {
?>
        <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
        Le possesseur de ce jeu est: <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> dollards !<br />
        Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
        <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?>: <em><?php echo $donnees['commentaires']; ?></em>
        </p>
<?php
    }
    
    $reponse->closeCursor();
?>
    
<?php
//--------------------------------------------------------------------------------    
?>
    
<h2>Récupérer des entrés avec des critère</h2>
    
<?php
  $reponse2 = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\' ORDER BY nom DESC LIMIT 0, 5');  
    
    while ($donnees2 = $reponse2->fetch())
    {
        echo $donnees2['nom'] . ' appartient à ' . $donnees2['possesseur'] . '<br />';
    }
    
    $reponse2->closeCursor();
?> 
    
<?php
//--------------------------------------------------------------------------------    
?>
    
<h2>Récupérer des entrés avec des variables</h2>
    <p>Copier cet url: http://localhost/oc-phpmysql/test.php?possesseur=Florent&prix_max=20</p>
    
<?php
    $reponse3 = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax ORDER BY prix');
    $reponse3->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));
    
    echo '<ul>';
    while ($donnees3 = $reponse3->fetch())
    {
        echo '<li>' . $donnees3['nom'] . ' (' . $donnees3['prix'] . ' dollards)</li>';
    }
    echo '</ul>';
    
    $reponse3->closeCursor();
?>
    
</body>

</html>
