<?php
include('phpqrcode/qrlib.php');
QRcode::png("http://www.botecodigital.info", "QR_code.png", QR_ECLEVEL_H , 4); 
?>
<img src="QR_code.png">