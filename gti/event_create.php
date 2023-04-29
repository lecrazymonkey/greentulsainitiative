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

    <title>Event Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Event Add
                            <a href="events.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Event Name</label>
                                <input type="text" name="Events" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Event Description</label>
                                <input type="text" name="Description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Event Date</label>
                                <input type="text" name="Date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Event Website</label>
                                <input type="text" name="Website" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_event" class="btn btn-primary">Save Organization/Group</button>
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