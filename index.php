<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<?php
ini_set("display_errors",1);
include('phpqrcode/qrlib.php');

$x = 1;
echo "<div class='container'><div class='row'>";
while($x <= 120){
	QRcode::png("Seu Número da Sorte: ".$x, "QR_code".$x.".png", QR_ECLEVEL_H , 4); 

	echo '<div class="col-md-3" style="text-align:center;"><img src="QR_code'.$x.'.png">';
	echo "<br>";
	echo "<p>Utilize um leitor de QRCode para saber seu número da sorte! =)</p>";
	echo '</div>';
	$x++;

}
echo "</div></div>";

?>
