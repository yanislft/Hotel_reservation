<div class="w3-row">
    
    <div id="form01" class="w3-col" style="padding: 3%">
        
            <span onclick="document.getElementById('form01').style.display='none'" class="w3-button w3-display-topright w3-theme">&times;</span>
            <form action="verif.php" method="get" class="w3-card-2"> 

                <h2 class="w3-container w3-theme w3-center">Formulaire de réservation</h2>

                <div class="w3-container">

                <div class="w3-text-theme w3-row">
                    <label for="nom">Nom :</label>
                    <input class="w3-input" type="text" id="nom" name="nom" placeholder="Votre Nom" onfocus="placeholder=''" onkeypress="validEntree()" <?php if (isset($nom_form)) { echo "value='$nom_form'"; } ?>>
                </div><br>

                <div class="w3-text-theme">
                    <label for="prenom">Prenom :</label>
                    <input class="w3-input" type="text" id="prenom" name="prenom" placeholder="Votre Prénom" onfocus="placeholder=''" onkeypress="validEntree()" <?php if (isset($prenom)) { echo "value='$prenom'"; } ?>>
                </div><br>

                <div class="w3-text-theme">
                    <label for="nb_pers">Nombre de personnes :</label>
                    <input class="w3-input" type="number" id="nb_pers" name="nb_pers" min="1"  onkeypress="validEntree()" <?php if ($nb_pers > 0 && $nb_pers < 5) {echo "value='$nb_pers'";} ?>> <?php if ($nb_pers < 0 || $nb_pers > 4) {echo "<p class='w3-container w3-red'> Veuillez rentrer un nombre de personnes compris entre 1 et 4</p>";} ?>
                </div><br>

                <div class="w3-text-theme">
                    <label for="duree_sej">Durée de séjour :</label>
                    <input class="w3-input" type="number" id="duree_sej" name="duree_sej" min="1" onkeypress="validEntree()" <?php if ($duree_sej > 0 && $duree_sej < 16) {echo "value='$duree_sej'";} ?>> <?php if (isset($duree_sej) && $duree_sej < 1 || $duree_sej > 15) {echo "<p class='w3-container w3-red'> Veuillez rentrer une durée de séjour compris entre 1 et 15 jours</p>";} ?>
                </div><br>
                
                <div class="w3-center">
                    <input class="w3-theme w3-button w3-round-xlarge w3-hover-white" type="submit" value="Soumettre" >
                    <input class="w3-theme w3-button w3-round-xlarge w3-hover-white" type="reset" value="Recommencer">
                </div>

                <br><br>
                </div>
            </form>

        
    </div>
</div>

<script>
    function verif_nb_pers()
    {
        var saisie = document.getElementById("nb_pers").value;

        if (saisie < 1 || saisie > 4) {alert("Veuillez saisir un nombre de personnes entre 0 et 4 !")};
    }

    function verif_duree_sej()
    {
        var saisie = document.getElementById("duree_sej").value;

        if (saisie < 1 || saisie > 4) {alert("Veuillez saisir une durée de séjour entre 1 et 15 jours !")};
    }
</script>