<?php
include('phpqrcode/qrlib.php');
QRcode::png("http://www.botecodigital.info", "QR_code.png"); 
echo "Foo";
?>
<img src="QR_code.png">