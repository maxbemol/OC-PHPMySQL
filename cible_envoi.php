<?php
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
    if ($_FILES['monfichier']['size'] <= 1000000)
    {
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extension_autorise = array('jpg', 'jpeg', 'gif', 'png');
        
        if (in_array($extension_upload, $extension_autorise))
        {
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}
?>