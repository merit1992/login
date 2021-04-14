<?php
if (isset($_POST["logout"])){
    session_start();
// destroying session
    if (isset($_SESSION["username"])){
        unset($_SESSION["username"]);
    }

    if (isset($_SESSION["password"])){
        unset($_SESSION["password"]);
    }
    print_r ("user successfully logged out");

    
}
?>