<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
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
	<div class="portal-access">
		<h1>Login</h1>
	<div class="login-portal">
			<form action="authenticate.php" method="post">
			    <div class="username">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" 					id="username" required></div>
				<div class="password">
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" 				id="password" required></div>
				<div class ="login-button">
				<input type="submit" value="Login"></div>
			</form>
		</div>
			<div class="signup">
		<p> Not yet a member? <a href="register.html"> Sign up today! </a> </p>
			</div>

	</div>
		</div>
	</main>
	    <footer>
        <p> Copyright © 2023 Adam Higgins, Reagan Scroggins, Greg Martinez, and Kenny Bigfeather | All Rights Reserved</p>
    </footer>
	</body>
</html>