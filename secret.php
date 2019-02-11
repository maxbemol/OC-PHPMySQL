<?php

htmlspecialchars($_POST['password']);

if (isset($_POST['password']))
{
    if ($_POST['password'] == 'kangourou')
    {
        echo "bon code";
    }
    
    else
    {
        echo "Mauvais code...!!!";
    }
}

else
{
    echo "Vous devez entrer un code d'accès";
}