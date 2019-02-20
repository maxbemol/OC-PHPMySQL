<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="src/minichat.css" />
        <title>MiniChat</title>
    </head>

    <body>
            
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
        
        <form method="post" action="minichat_post.php">
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" size="30" maxlenght="8" autofocus required/>
            <br />
            <label for="message">Message :</label>
            <textarea name="message" id="message"></textarea>
            <br />
            <input type="submit" value="Envoyer" />
            <br />
        </form>
        
        <?php
            $chat_10 = $bdd->query('SELECT ID, pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0,10');
        
            while ($chat_mess = $chat_10->fetch())
            { ?>
                <p>        
                <strong><?php echo $chat_mess['pseudo']; ?> : </strong>
                <?php echo $chat_mess['message'] ; ?>
                </p>
        <?php
            }
        
            $chat_10->closeCursor();
        
        ?>
        
    </body>
    
</html>