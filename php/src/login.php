<?php
require_once 'mysql.php';

function login($name, $password) {
    $query= 'SELECT * FROM user WHERE username=\''.$name.'\'AND password=\''.$password."';";
    $result = mysqli_query($GLOBALS['connection'], $query);
    if((count(mysqli_fetch_array($result)))==0)
        return false;
    else
        if(session_status()==PHP_SESSION_NONE)
            session_start();
        $_SESSION["username"] = $name;
        $_SESSION["password"] = $password;
        $_SESSION["isadmin"] = mysqli_fetch_assoc($result)["admin"];
        return true;

}
function confirmLogin(){
    if(session_status()==PHP_SESSION_NONE) session_start();
    if(!isset($_SESSION["password"])) return false;
    $password = $_SESSION['password'];
    $name = $_SESSION['username'];
    $query = 'SELECT * FROM user WHERE username=\''.$name.'\'AND password=\''.$password."';";
    $result = $GLOBALS['connection']->query($query);
    if(count(mysqli_fetch_assoc($result))==0)
        return false;
    else
        return true;

}