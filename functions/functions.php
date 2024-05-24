<?php
function redirect_homepage(){
    header("Location:home.php");
    exit();
}


function add_scripts(){
    echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>';
    echo '<script src="./js/app.js"></script>';
    echo '<script src="./js/hamp.js"></script>';

    global $page;

    switch($page){
        case 'home':
            echo '<script src="../assets/js/slider.js"></script>';
            break;
        case 'music':
            echo '<script defer src="https://sdk.scdn.co/spotify-player.js"></script>';
            break;
        case 'video':
            echo '<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>';
            echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>';
            echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>';
            break;
    }
}


function add_stylesheets(){
    $page_title = "Yeat"; // defaul name
    $url = $_SERVER['REQUEST_URI'];

    if (strpos($url, 'video.php') !== false) {
        $page_title = "Video";
    } elseif (strpos($url, 'music.php') !== false) {
        $page_title = "Music";
    } elseif (strpos($url, 'tour.php') !== false) {
        $page_title = "Tour";
    }

    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>' . $page_title . '</title>';
    echo '<link rel="icon" href="./img/yeat icon.png" type="image/x-icon">';
    echo '<link rel="shortcut icon" href="./img/yeat icon.png" type="image/x-icon">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">';
    echo '<link rel="stylesheet" href="./css/style.css" />';
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">';
    echo '</head>';
}


?>