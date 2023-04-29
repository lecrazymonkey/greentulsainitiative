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

    <title>Manage Initiatives</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

                    <div class="card-header">
                        <h4>Initiatives Edit 
                            <a href="initiatives.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

    <table id="members">
    <table class="sortable" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>Initiative Name/Title</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                     <th>End Date</th>
                                     <th>id</th>
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
                                                <td><?= $initiatives['id']; ?></td>
                                                <td>
                                                    <a href="initiative_edit.php?id=<?= $initiatives['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_initiative" value="<?=$initiatives['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
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