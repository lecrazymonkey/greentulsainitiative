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

    <title>Organization/Group Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Organization/Group Edit 
                            <a href="org_admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['FK1']))
                        {
                            $FK1 = mysqli_real_escape_string($con, $_GET['FK1']);
                            $query = "SELECT * FROM org WHERE FK1='$FK1' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $org = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="FK1" value="<?= $org['FK1']; ?>">

                                    <div class="mb-3">
                                        <label>Organization/Group Name</label>
                                        <input type="text" name="org" value="<?=$org['org'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>City</label>
                                        <input type="text" name="city" value="<?=$org['city'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>State</label>
                                        <input type="text" name="state" value="<?=$org['state'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Social Media</label>
                                        <input type="text" name="socialmedia" value="<?=$org['socialmedia'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$org['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_org" class="btn btn-primary">
                                            Update Organization/Group
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