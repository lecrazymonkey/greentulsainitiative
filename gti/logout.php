<?php
session_start();
session_destroy();
// Redirect to the login page:
header("refresh:3; url=https://greentulsainitiative.com/");

echo 'You have been successfully logged out and are being redirected to the homepage'
?>