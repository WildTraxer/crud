<?php

$host = 'localhost';
$user = 'user1';
$password = 'user';
$db = 'nomerphone';

$link = mysqli_connect($host, $user, $password, $db);

if (!$link) {
echo "Ошибка: Невозможно установить соединение с с базой
данных NomerPhone.";
echo '<br>';
echo "Код ошибки errno: " . mysqli_connect_errno();
echo '<br>';
echo "Текст ошибки error: " . mysqli_connect_error();
exit;
}

echo "Соединение с базой данных NomerPhone установлено!";

//mysqli_close($link);
?>