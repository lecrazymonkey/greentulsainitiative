<?php
session_start();
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

    <title>Organization/Group Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Organization Add
                            <a href="organizations.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Organization / Group Name</label>
                                <input type="text" name="org" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Organization/Group Website</label>
                                <input type="text" name="url" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>City</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>State</label>
                                <input type="text" name="state" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Social Media Link</label>
                                <input type="text" name="socialmedia" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_org" class="btn btn-primary">Save Organization/Group</button>
                            </div>

                        </form>
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