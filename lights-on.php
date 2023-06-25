<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lights ON</title>
</head>
<link rel="stylesheet" href="lights-on.css">
<script src="lights-on.js"></script>
<?php
include "navigation.php";
?>
<body>
    <table>
        <tr>
            <td><h1>Lights ON</h1></td>
        </tr>
        <tr><td><h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1></td></tr>
</body>
<?php
include "footer.php"
?>
</html>