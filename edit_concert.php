
<?php
include "parts/header.php";

// Проверяем, есть ли переданный идентификатор концерта
if (!isset($_GET['id'])) {
    // Если нет, перенаправляем обратно на страницу с концертами
    header('Location: admin-tour.php');
    exit;
}

// Получаем идентификатор концерта из GET-параметров
$concert_id = $_GET['id'];

// Получаем информацию о концерте по его идентификатору
$concert = new Concert();
$concert_data = $concert->get_concert_by_id($concert_id);

// Проверяем, найден ли концерт с указанным идентификатором
if (!$concert_data) {
    // Если не найден, перенаправляем обратно на страницу с концертами
    header('Location: admin-tour.php');
    exit;
}

// Обработка отправленной формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $city = $_POST['city'];
    $info = $_POST['info'];
    $tickets = $_POST['tickets'];
    $rsvp = $_POST['rsvp'];

    // Собираем новые данные в массив
    $new_data = [
        'date' => $date,
        'venue' => $venue,
        'city' => $city,
        'info' => $info,
        'tickets' => $tickets,
        'rsvp' => $rsvp
    ];

    // Обновляем информацию о концерте в базе данных
    $concert->update_concert($concert_id, $new_data);

    // Перенаправляем обратно на страницу с концертами после обновления
    header('Location: admin_tour.php');
    exit;
}
?>

<main>
    <div class="rozdel">
        <h2>Edit Concert</h2>
    </div>

    <div class="container-sm mt-5">
        <form action="" method="POST">
            <label for="date">Date:</label>
            <input type="text" id="date" name="date" value="<?php echo htmlspecialchars($concert_data['date']); ?>" required>

            <label for="venue">Venue:</label>
            <input type="text" id="venue" name="venue" value="<?php echo htmlspecialchars($concert_data['venue']); ?>" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($concert_data['city']); ?>" required>

            <label for="info">Info:</label>
            <textarea id="info" name="info" rows="4" required><?php echo htmlspecialchars($concert_data['info']); ?></textarea>

            <label for="tickets">Tickets:</label>
            <input type="text" id="tickets" name="tickets" value="<?php echo htmlspecialchars($concert_data['tickets']); ?>" required>

            <label for="rsvp">RSVP:</label>
            <input type="text" id="rsvp" name="rsvp" value="<?php echo htmlspecialchars($concert_data['rsvp']); ?>" required>

            <button type="submit">Save Changes</button>
        </form>
    </div>
</main>

<?php include "parts/footer.php"; ?>

