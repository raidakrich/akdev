<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AKDEV</title>
<link rel="stylesheet" href="./stylesheet/main.css">
<script src="./stylesheet/script.js" defer></script>
<link rel="icon" href="./stylesheet/img/AKDEV.ico" id="favicon">
<?php
    $cssPath = './stylesheet/main.css';
    if (!file_exists($cssPath)) {
        $cssPath = '../stylesheet/main.css';
    }

    $jsPath = './stylesheet/script.js';
    if (!file_exists($jsPath)) {
        $jsPath = '../stylesheet/script.js';
    }
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Libre+Barcode+39&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>