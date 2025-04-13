<?php
    $titre = "Réservations";
    include 'entete.php';
?>

<div class="w3-card-4">
    <h4 class="w3-center">Liste des réservations</h4>

    <div>
        <label for="taille_chambre">Filtrer par taille de chambre :</label>
        <select class="w3-select w3-theme" style="width: 9%;" name="taille_chambre" id="taille_chambre">
            <option value="all">Toutes</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div><br>
    
    <div class="w3-row-padding" id="reservations">
        <?php

            $reservations = file("resa.txt", FILE_IGNORE_NEW_LINES);
            sort($reservations);

            $resaFile = fopen("resa.txt", "w");

            foreach ($reservations as $reservation) {fwrite($resaFile, $reservation . PHP_EOL);}

            fclose($resaFile);

            $resa = fopen("resa.txt", "r");

            $ligne = '';
            $ligne2 = fgets($resa);
            $num_form = 1;

            while (!feof($resa)) 
            {
                $ligne = $ligne2;
                $ligne2 = fgets($resa);
                $info_resa = explode("|", $ligne);
        ?>
                <div class="w3-col s12 m6 l6 w3-margin-bottom taille_<?php echo $info_resa[3]; ?>">
                    <div class="w3-card">
                        <div class="w3-container w3-center">
                            <p>Numéro de réservation : <?php echo $info_resa[0] ?></p>
                            <p>Prénom : <?php echo $info_resa[1] ?></p>
                            <p>Nom : <?php echo $info_resa[2] ?></p>
                            <p>Nombre de personne(s) : <?php echo $info_resa[3] ?></p>
                            <p>Durée du séjour : <?php echo $info_resa[4] ?></p>
                        </div>
                        <div class="w3-center w3-row">
                            <?php 
                                include 'form_modif.php';
                                include 'form_supp.php';
                            ?>
                        </div>
                        <br> 
                    </div>
                </div>
        <?php
                $pos++;
                if ($pos % 2 == 0) 
                {
                    echo '<div class="w3-clear"></div>';
                }
                $num_form++;
            }
            fclose($resa);
        ?>
    </div>
</div>

<script>
document.getElementById('taille_chambre').addEventListener('change', function() {
  var filter = this.value;
  var reservations = document.getElementsByClassName('w3-col');

  for (var i = 0; i < reservations.length; i++) {
    var reservation = reservations[i];
    // Vérifier si l'élément courant est un modal
    if (!reservation.className.includes('w3-modal')) {
      if (filter === 'all') {
        reservation.style.display = 'block';
      } else {
        reservation.style.display = reservation.className.includes('taille_' + filter) ? 'block' : 'none';
      }
    }
  }
});
</script>



<?php include 'pied.php'; ?>