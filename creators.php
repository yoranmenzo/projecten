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
// Initialize the session
session_start();
 
// Check if a special user is logged in, if not then redirect him to login page
if(isset($_SESSION["special_user"]) && $_SESSION["special_user"] === true){

}
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login.php");
    exit;
}
?>
<?php
include "navigation.php"
?>
<body>
<table>
        <tr>
            <td><h1>Creators</h1></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
<?php
include "footer.php"
?>
</html>