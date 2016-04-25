<?php

$this->inc('elements/header.php'); 
echo "<div class=\"container\">";
$contenu = new Area('Contenu');
$contenu->display($c);
echo "</div>";
$this->inc('elements/footer.php');?>