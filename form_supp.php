<div>
        <button onclick="document.getElementById('supp_<?php echo $num_form; ?>').style.display='block'" class="w3-button w3-theme" style="margin-left: 1%; margin-top: 1%; margin-bottom: 1%">Supprimer</button>
</div>

<div id="supp_<?php echo $num_form; ?>" class="w3-col w3-modal w3-card" style="padding: 3%;">
    <div class="w3-modal-content">
        <div class="w3-container">
            <p>Voulez vous vraiment supprimer la réservation n°<?php echo $info_resa[0] ?> ?</p>
            <form action="supp_resa.php" method="get">
                <input type="hidden" name="id" value="<?php echo $info_resa[0]; ?>">
                <button type="submit" class="w3-button w3-red" style="margin-bottom : 2%;">Supprimer</button>
                <button type="button" onclick="document.getElementById('supp_<?php echo $num_form; ?>').style.display='none'" class="w3-button w3-theme" style="margin-bottom : 2%;">Annuler</button>
            </form>
        </div>
    </div>
</div>