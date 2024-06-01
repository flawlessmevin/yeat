<?php


include 'parts/header.php';

if(isset($_GET['id'])) {
    // Получаем идентификатор концерта из GET-запроса
    $concert_id = $_GET['id'];

    // Создаем экземпляр класса Concert
    $concert = new Concert();

    // Выполняем удаление концерта по его идентификатору
    $success = $concert->delete_concert($concert_id);

    // Проверяем успешность выполнения удаления
    if($success) {
        // Если удаление прошло успешно, перенаправляем на страницу admin_tour.php
        header('Location: admin_tour.php');
        exit;
    } else {
        // Если возникла ошибка при удалении, выведем сообщение об ошибке
        echo "Error: Unable to delete concert.";
    }
} else {
    // Если идентификатор концерта не был передан, выводим сообщение об ошибке
    echo "Error: Concert ID not provided.";
}


