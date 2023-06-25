<?php
// Initialize the session
session_start();

// Check if a special user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location:login.php");
    exit;
}
?>

<link rel="stylesheet" href="navigation.css">
<div class="topnav">
  <a href="lights-on.php">Home</a>
  <a href="starter-tips.php">Starter tips</a>
  <a href="updates.php">Updates</a>
  <a href="questions.php">Questions</a>
  
  <?php
  // Check if the user is logged in and display appropriate links
  if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
      echo '<a href="logout.php" class="split">Logout</a>';
  } else {
      echo '<a href="login.php" class="split">Login</a>';
      echo '<a href="register.php" class="split">Register</a>';
  }
  ?>
</div>