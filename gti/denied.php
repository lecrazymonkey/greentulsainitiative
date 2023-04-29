<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Permission Denied</title>
    <script>
      // Set the countdown timer for 5 seconds
      var timeLeft = 5;
      
      // Function to update the timer and redirect the user when time is up
      function countDown() {
        // Display the time left to the user
        document.getElementById("timer").innerHTML = timeLeft + " seconds left...";

        // Decrement the time left by 1 second
        timeLeft--;

        // Redirect the user to the previous page when time is up
        if (timeLeft < 0) {
          window.location.href = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
        }
        // Call the function again after 1 second
        else {
          setTimeout(countDown, 1000);
        }
      }
    </script>
  </head>
  <body onload="countDown();">
    <p>You do not have the appropriate permissions to access this page, sending you back to the previous page.</p>
    <p id="timer"></p>
  </body>
</html>
