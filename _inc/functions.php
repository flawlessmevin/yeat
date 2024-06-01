<?php

require('config.php');

function redirect_homepage(){
    header("Location:templates/home.php");
    exit();
}
?>