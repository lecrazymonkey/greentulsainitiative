<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Organizations and Members </title>
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
    <h1>Members</h1>
    <br>
    <div class = "member_add">
    <button class="button member" button onclick="window.location.href = 'member_create.php';"style="background-color: beige;"> Add Member </button>
    <br>
    <button class="button admin" button onclick="window.location.href = 'mem_admin.php';"style="background-color: beige;"> Admin Menu </button>
    </div>

    <table id="members">
    <table class="sortable" style="text-align: center;">
            <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $DATABASE_HOST = 'localhost';
                    $DATABASE_USER = 'u766251276_greentulsa';
                    $DATABASE_PASS = 'Greentulsa23!';
                    $DATABASE_NAME = 'u766251276_greentulsa1';

                // Create connection
                $connection = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

                // Check Connection
                if ($connection->connect_error) {
                    die("Connectoin failed: " . $connection->connect_error);
                }

                // Read all rows from database table
                $sql = "SELECT * FROM mem";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " .$connection->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>" . $row["member"] . "</td>
                    <td>" . $row["contact"] . "</td>
                </tr>";
                }
                ?>
            </tbody>
    </table>
    </table>
    
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("sortable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

    <footer2>
        <p> Copyright © 2023 Adam Higgins, Reagan Scroggins, Greg Martinez, and Kenny Bigfeather | All Rights Reserved</p>
    </footer2>

</body>
</html>