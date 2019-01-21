<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2> 
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <?php //commentaire une ligne
                echo "Celle-ci a été écrite entièrement en PHP."; 
            ?><br />
            Aujourd'hui nous sommes le 
            <?php 
                echo date('d/m/Y h:i:s'); /* commentaire multi ligne*/
            ?>.
            
            <?php
            phpinfo(;
            ?>
        </p>
    </body>
</html>