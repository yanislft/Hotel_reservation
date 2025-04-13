<?php
    $titre = "Suite Clair de Lune";
    include 'entete.php';
?>
    <style>
        .centrer_img img {
            width: 45%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
    </style>
    
    <div class="w3-panel">
        <h1 style="font-family:Amita" class="w3-center">Suite Clair de Lune</h1>

        <div class="w3-cantainer w3-display-container centrer_img" >
            <img class="mySlides" src="ch2.jpg">
            <img class="mySlides" src="piece_com.jpg">
            <img class="mySlides" src="sdb.jpg">

            <button class="w3-button w3-theme w3-display-hover w3-display-left" style="margin-left: 20%"  onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-theme w3-display-hover w3-display-right"  style="margin-right: 20%" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <br>

        <p>Bienvenue dans notre Suite Clair de Lune, une oasis de tranquillité et de raffinement. Cette chambre spacieuse offre un salon confortable, une chambre principale avec un lit king-size, une salle de bains luxueuse avec baignoire et douche à effet pluie, ainsi qu'un espace bureau équipé. Parfaite pour une escapade romantique ou un séjour relaxant, la Suite Clair de Lune vous invite à vous détendre et à profiter de chaque instant dans un cadre élégant et apaisant.</p>
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) 
        {
            showDivs(slideIndex += n);
        }

        function showDivs(n) 
        {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) 
            {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }
    </script>

    <?php include 'form.php'; ?>
<?php
    include 'pied.php';
?>