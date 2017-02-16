<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<?php
ini_set("display_errors",1);
include('phpqrcode/qrlib.php');

$x = 1;
while($x <= 120){
	QRcode::png("Seu Número da Sorte: ".$x, "QR_code".$x.".png", QR_ECLEVEL_H , 4); 

	echo '<div class="col-md-3"><img src="QR_code'.$x.'.png">';
	echo $x;
	echo '</div>';
	$x++;

	$x++;
}


?>
