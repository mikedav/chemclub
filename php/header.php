<?php
require_once "./src/login.php";
require_once "./var/path.php";
function echoHeader($pagename){
    $cl = confirmLogin();
    echo '
        <!DOCTYPE html>
        <html>
            <head>
                <title>'.$pagename.'</title>
                <link rel="stylesheet" type="text/css" href="'.$GLOBALS["defstyle"].'">
            </head>
            <body>
                <header>
                    <div id="logo">chemclub</div>
                    <a href="'.$GLOBALS["sitepath"].'/acc"><div class="button">Manage acc</div></a>
    ';
    if($cl)
        echo '<a href=\"'.$GLOBALS["sitepath"].'/acc\"><div class=\"button\">Manage acc</div></a>';
}
echoHeader("title");