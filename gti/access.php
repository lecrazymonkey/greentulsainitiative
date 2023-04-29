<?php  



function access($mrank)
{

    if(isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"][$mrank])
    {
        header("Location: denied.php");
        die;
    }

}



$_SESSION["ACCESS"]["ADMIN"] = isset($_SESSION['rank']) && trim($_SESSION['rank']) == "admin";
$_SESSION["ACCESS"]["USER"] = isset($_SESSION['rank']) && trim($_SESSION['rank']) == "user";
