<?php
require_once "../php/src/login.php";
if(isset($_GET["logout"])) {
    if (session_status() == PHP_SESSION_NONE) session_start();
    session_destroy();
} else if(isset($_POST["username"])){
    if(login($_POST["username"], $_POST["password"]))
        echo "s";
    else
        echo "f";
} else if (confirmLogin()){
    echo "u";
} else {
    echo "r";
}