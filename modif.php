<?php
    $titre = "Modification";
    include 'entete.php';

    $prenom = $_GET['prenom'];
    $nom_form = $_GET['nom'];
    $nb_pers = $_GET['nb_pers'];
    $duree_sej = $_GET['duree_sej'];
    $id = $_GET['id'];
    $modif_info = "$id|$prenom|$nom_form|$nb_pers|$duree_sej\n";

    if ($nb_pers > 0 && $nb_pers < 5 && $duree_sej > 0 && $duree_sej <= 15) 
    { 
        $tab_info = file("resa.txt");
        
        foreach ($tab_info as &$info_resa) 
        {
            $infos = explode("|", $info_resa);

            if ($infos[0] == $id) 
            { ?>
                  <div class="w3-center">
                    <p>Les modifications suivantes ont été aportés à votre réservation :</p>
                    <?php
                        if ($prenom != $infos[1]) {echo "Le prénom '$infos[1]' à été changé en '$prenom'. <br>";}
                        if ($nom_form != $infos[2]) {echo "Le nom '$infos[2]' à été changé en '$nom_form'. <br>";}
                        if ($nb_pers != $infos[3]) {echo "La taille de la chambre '$infos[3]' à été changé en '$nb_pers'. <br>";}
                        if ($duree_sej != $infos[4]) {echo "La durée du séjour '$infos[4] jours' à été changé en '$duree_sej jours'. <br>";}
                    ?><br>
                    <a class="w3-button w3-theme" href="resa.php">Retour à la page des réservations</a>
                </div><br>
                <?php
                $info_resa = $modif_info;
                break;
            }
        }
        
        file_put_contents("resa.txt", implode($tab_info));

    } 
    else {include 'form_modif.php';}

    include 'pied.php';
?>
