<?php 	
$this->inc('elements/header.php'); 

echo "<div class='slider'>
    	<div class='container'>";
    			$contenu = new Area('Contenu');
				$contenu->display($c);
echo "    	</div>
      </div>
      <div class=\"container\">";

echo "<div class=\"row\">
		<div class=\"col-md-4\">";
			$col1 = new Area('Col1');
			$col1->display($c);
echo 	"</div>
		<div class=\"col-md-4\">";
			$col2 = new Area('Col2');
			$col2->display($c);
echo 	"</div>
		<div class=\"col-md-4\">";
			$col3 = new Area('Col3');
			$col3->display($c);
echo 	"</div>
	 </div>

	 <div class=\"row\">
	 	<div class=\"col-md-4\">
	 		<div class=\"Social\">";
	 			$social = new Area('Social');
				$social->display($c);
echo   	   "</div>
		</div>
		<div class=\"col-md-4\">
			<div class=\"contact\">";
				$contact = new Area('Contact');
				$contact->display($c);
echo		"</div>
		</div>
		<div class=\"col-md-4\">
			<div class=\"actualite\">";
				$actualite = new Area('Actualite');
				$actualite->display($c);
echo		"</div>
		</div>
	</div>
	</div>";

$this->inc('elements/footer.php');
