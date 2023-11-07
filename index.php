<?php

declare(strict_types=1);

use chillerlan\QRCode\QRCode;
require_once('vendor/autoload.php');

(double) $random = 4.9855623231905E+19;

$qrcode = (new QRCode())->render("https://www.twistsports.com?Qr=$random");
?>
<!DOCTYPE html>
<html>

<body>

    <div class="container">
        <img src='<?= $qrcode ?>' alt='QR Code' width='200' height='200'>
    </div>
</body>

</html