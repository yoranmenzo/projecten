<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verjaardag + leeftijd</title>
<script src="verjaardag.js"></script>
<link rel="stylesheet" href="verjaardag.css">
</head>
<body>
    <?php
    include "homepage.php"
    ?>
    <body onload="myfuncion()">
    <div id="outputDiv">
    </div>
    voornaam:<input id="vn" type="text">
    <br>
    achternaam:<input id="an" type="text">
    <br>
    geboortedatum:<input id="gd" type="date" value="' + maxDate + '">
    <br>
    <button onclick="myfuncion()">gegevens tonen</button>
</body>
</html>