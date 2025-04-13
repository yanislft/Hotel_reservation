<?php
         if (isset($_GET['Page'])){ 
            include($_GET['Page']); 
         } else {    
            include('intro.php'); 
         } 
?>