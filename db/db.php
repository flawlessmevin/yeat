<?php

$dbhost = "localhost";
$dbname = "yeat";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_albums() {
    global $db;
    $albums = $db->query("SELECT * FROM albums");
    return $albums;
}


function get_singles() {
    global $db;
    $singles = $db->query("SELECT * FROM singles");
    return $singles;
}

