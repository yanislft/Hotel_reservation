<?php
    $titre = "Vérification";
    include 'entete.php';

    $prenom = $_GET['prenom'];
    $nom_form = $_GET['nom'];
    $nb_pers = $_GET['nb_pers'];
    $duree_sej = $_GET['duree_sej'];

    $resa = fopen("resa.txt", "a");
    
    $id = substr(uniqid(), -5);

    if ($nb_pers > 0 && $nb_pers < 5 && $duree_sej > 0 && $duree_sej <= 15) 
    { ?>
       
       <div class="w3-center">
            <p>Vous avez réservé la Suite Clair de Lune pour <?php echo $nb_pers ?> personnes(s) avec succès !</p>
            <a class="w3-button w3-theme" href="intro.php">Retour à l'acceuil</a>
        </div><br>

        <?php
        $save_client = "$id|$prenom|$nom_form|$nb_pers|$duree_sej|\n";
        fwrite($resa, $save_client);
        fclose($resa);
    }

    else { include 'form_verif.php'; }

    include 'pied.php';
?>