<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> About </title>
</head>

        <header>

<nav>
  <div class="navbar-logo">
    <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
  </div>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="map.php">Maps</a></li>
    <li class="dropdown">
      <a href="#">Orgs/Members</a>
      <ul class="dropdown-menu">
        <li><a href="organizations.php">Organizations</a></li>
        <li><a href="members.php">Members</a></li>
      </ul>
    </li>
    <li><a href="about.php">About</a></li>
    <li class="dropdown">
      <a href="#">Account</a>
      <ul class="dropdown-menu">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <?php if (isset($_SESSION['name'])) { ?>
          <li><a href="logout.php">Logout</a></li>
        <?php } ?>
      </ul>
    </li>
  </ul>
</nav>
      </header>

<body>
   <main>
<hr>

   </main>
       <footer>
        <p> Copyright © 2023 Adam Higgins, Reagan Scroggins, Greg Martinez, and Kenny Bigfeather | All Rights Reserved</p>
    </footer>
</body>
</html>