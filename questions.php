
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lights ON</title>
</head>
<link rel="stylesheet" href="questions.css">
<script src="questions.js"></script>

<?php
include "navigation.php"
?>
<body>
<table>
        <tr><td><h1>questions</h1></td></tr>
        <tr><td><input type="text" placeholder="ask your questions here!"><input type="submit" value="Add" onclick="printInput()"></td></tr>
    </table>
</body>
<?php
include "footer.php"
?>
</html>