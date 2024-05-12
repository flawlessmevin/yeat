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

function get_videos(){
    global $db;
    $videos = $db->query("SELECT * FROM videos");
    return $videos;
}

function get_career(){
    global $db;
    $career = $db->query("SELECT * FROM career");
    return $career;
}

function get_music_styles(){
    global $db;
    $music_style = $db->query("SELECT * FROM music_style");
    return $music_style;
}

function get_info_table(){
    global $db;
    $info_table = $db->query("SELECT * FROM info_table");
    return $info_table;
}