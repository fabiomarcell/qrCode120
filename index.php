<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<style>
@media print {
  [class*="col-sm-"] {
    float: left;
    height:25%;
  }
}
</style>

<?php
ini_set("display_errors",1);
include('phpqrcode/qrlib.php');

$x = 1;
echo "<div class='container'><div class='row'>";
while($x <= 150){
	QRcode::png("Seu Número da Sorte: ".$x, "QR_code".$x.".png", QR_ECLEVEL_H , 4); 

	echo '<div class="col-md-3 col-sm-4 col-xs-4" style="text-align:center;"><img src="QR_code'.$x.'.png">';
	echo "<br>";
	echo "<p>Escaneie para descobrir seu número da sorte, e concorrer a uma camisa da hora =)</p>";
	echo '</div>';
	$x++;

}
echo "</div></div>";

?>
