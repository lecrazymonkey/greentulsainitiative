<?php
session_start();
require 'dbcon.php';
include "access.php";
access('ADMIN');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Event Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Event Edit 
                            <a href="event_admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['eventid']))
                        {
                            $eventid = mysqli_real_escape_string($con, $_GET['eventid']);
                            $query = "SELECT * FROM events WHERE eventid='$eventid' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $events = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="eventid" value="<?= $events['eventid']; ?>">

                                    <div class="mb-3">
                                        <label>Event</label>
                                        <input type="text" name="Events" value="<?=$events['Events'];?>" class="form-control">
                                    </div>                                    
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <input type="text" name="Description" value="<?=$events['Description'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Member Name</label>
                                        <input type="text" name="Date" value="<?=$events['Date'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="Website" value="<?=$events['Website'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_event" class="btn btn-primary">
                                            Update Event
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
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