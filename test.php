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
          //Variables part2
          $nombre_de_ligneW = 1;  
        ?>
            
        <?php
            echo "<strong>Boucle While:</strong> <br />";
            while ($nombre_de_ligneW <= 25)
            {
                echo 'Ceci est la ligne #' . $nombre_de_ligneW . '<br />';
                $nombre_de_ligneW ++;
            }
        ?>
        <br />
            
        <?php
            echo "<strong>Boucle For:</strong><br />";
            for ($nombre_de_ligneF = 1; $nombre_de_ligneF <=25; $nombre_de_ligneF++)
            {
                echo 'Ceci est la ligne #' . $nombre_de_ligneF . '<br />';
            }
        ?>
        </p>
</body>

</html>
