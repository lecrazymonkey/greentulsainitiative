<?php

session_start();

if(isset($_SESSION['name']))
{
    echo $_SESSION['name'];
}

if(isset($_SESSION['id']))
{
    echo $_SESSION['id'];
}

if(isset($_SESSION['rank']))
{
    echo $_SESSION['rank'];
}


?>