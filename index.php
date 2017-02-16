<?php
ini_set("display_errors",1);
include('phpqrcode/qrlib.php');

$x = 1;
while(x <= 120){
	QRcode::png("Seu Número da Sorte: ".$x, "QR_code".$x.".png", QR_ECLEVEL_H , 4); 
	$x++;
}

$x = 1;
while(x <= 120){
	echo '<img src="QR_code'.$x.'.png">';
	$x++;
}
?>
