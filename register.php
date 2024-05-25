<?php

include __DIR__ . '/classes/Database.php'; // если класс находится в другом пространстве имён


include 'classes/User.php';


$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();
    $result = $user->register($nickname, $email, $password);

    if ($result === "User registered successfully!") {
        header('Location: welcome.php'); // Перенаправление на страницу приветствия после успешной регистрации
        exit();
    } else {
        $message = $result;
    }
}
?>

<?php include 'parts/header.php'?>;
<h2>Registration</h2>
<?php if ($message): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>

<form action="register.php" method="POST">
    <label for="nickname">Nickname:</label>
    <input type="text" id="nickname" name="nickname" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Register</button>
</form>


<?php include 'parts/footer.php'?>;
