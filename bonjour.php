<?php
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repete']))
{
    $_GET['repete'] = (int) $_GET['repete'];
    
    if ($_GET['repete'] >= 1 AND $_GET['repete'] <= 100)
    {
        for ($i = 0; $i < $_GET['repete']; $i++)
        {
            echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
        }
    }
}

else
{
    echo 'Il faut renseigner un nom et un prenom !';
}
?>