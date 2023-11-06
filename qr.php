<?php

declare(strict_types=1);

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

require_once('vendor/autoload.php');


$qrcode = (new QRCode())->render('https://www.twistsports.com/');
?>
<!DOCTYPE html>
<html>

<body>

    <div class="container">
        <img src='<?= $qrcode ?>' alt='QR Code' width='200' height='200'>
    </div>
</body>

</html