<?php



include "parts/header.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $city = $_POST['city'];
    $info = $_POST['info'];
    $tickets = $_POST['tickets'];
    $rsvp = $_POST['rsvp'];

    // Создаем экземпляр класса Concert
    $concert = new Concert();

    // Выполняем добавление нового концерта в базу данных
    $success = $concert->create_concert($date, $venue, $city, $info, $tickets, $rsvp);

    // Проверяем успешность выполнения создания концерта
    if ($success) {
        // Если создание прошло успешно, перенаправляем на страницу admin_tour.php
        header('Location: admin_tour.php');
        exit;
    } else {
        // Если возникла ошибка при создании концерта, выводим сообщение об ошибке
        echo "Error: Unable to create concert.";
    }
} else {
    // Если данные формы не были отправлены методом POST, выводим сообщение об ошибке
    echo "Error: Form data not provided.";
}

include "parts/footer.php"; ?>
