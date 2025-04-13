<?php
    $id = $_GET['id'];

    $tab_info = file("resa.txt");

    foreach ($tab_info as $indice => $info_resa) 
    {
        $infos = explode("|", $info_resa);

        if ($infos[0] == $id) 
        {
            unset($tab_info[$indice]);
            break;
        }
    }

    file_put_contents("resa.txt", implode("", $tab_info));

    include 'resa.php';
?>