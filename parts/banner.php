<?php
require_once "functions/functions.php";
?>
<?php
// Получаем имя текущей страницы
$page_name = basename($_SERVER['PHP_SELF'], '.php');

// Создаем экземпляр класса Page
$page_object = new Banner();

// Выводим баннер для текущей страницы
$page_object->generate_banner($page_name);
?>
