<?php
session_start();
?>

<!doctype html>

<link rel="stylesheet" href="style.css">

<html>
    <head>
        <meta charset="utf-8">
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
        <h3> Welcome</h3><br>
        <p1> to </p1>
        <h3>Green Tulsa Initiative</h3>
        <div class="content">
         <img src="images/tulsa-1.jpg" img class="tulsa-skyline" alt="Tulsas Skyline">
         <h3> To see a list of current initiatives please click&nbsp;     <a href="initiatives.php"> here </a></h3>
         </div>
        <section>
 <h2> </h2> <br>


   </div>
      </main>
     
        </section>

    <footer2>
        <p> Copyright © 2023 Adam Higgins, Reagan Scroggins, Greg Martinez, and Kenny Bigfeather | All Rights Reserved</p>
    </footer2>

</body>
</html>