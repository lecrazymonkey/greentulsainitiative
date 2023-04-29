<?php
    session_start();
    require 'dbcon.php';
    include "access.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Initiatives </title>
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
  


        <?php include('message.php'); ?>



    <h1>Initiatives</h1>
    <br>
    <div class = "member_add">
    <button class="button member" button onclick="window.location.href = 'initiative_create.php';"style="background-color: beige;"> Add initiative </button>
    <br>
    <button class="button admin" button onclick="window.location.href = 'initiative_admin.php';"style="background-color: beige;"> Admin Menu </button>
    </div>


    <table id="members">
    <table class="sortable" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>Initiative Name/Title</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                     <th>End Date</th>
                                     <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM initiatives";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $initiatives)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $initiatives['title']; ?></td>
                                                <td><?= $initiatives['description']; ?></td>
                                                <td><?= $initiatives['start']; ?></td>
                                                <td><?= $initiatives['end']; ?></td>
                                                <td>
                                                    <a href="initiative_view.php?id=<?= $initiatives['id']; ?>" class="btn btn-success btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
        <footer>
        <p> Copyright © 2023 Adam Higgins, Reagan Scroggins, Greg Martinez, and Kenny Bigfeather | All Rights Reserved</p>
    </footer>

</body>
</html>