<?php
include 'connect.php';
$phone = htmlentities(trim($_POST['Phone']));
$fio = htmlentities(trim($_POST['FIO']));
$date_birth = htmlentities(trim($_POST['DateBirth']));
$region = htmlentities(trim($_POST['Region']));

if (isset($phone) && isset($fio) && isset($date_birth) && isset($region))
{
    //формируем запрос на добавление
    $sql = "INSERT INTO `phone`(`Phone`, `FIO`, `DateBirth`, `Region`) VALUES ('$phone','$fio','$date_birth','$region')";
    $result = mysqli_query($link, $sql);
    //проверка результат на добавления
    if($result) {
        echo "Данные успешно добавлены";
    }
    else {
        echo "Произошла ошибка: " . mysqli_error($link);
    }
}
//закрываем подключение к бд
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Добавление в таблицу данных номера</title>
</head>
<body>
    <form action="header.php" method="post">
    <input type="submit" value="Вернуться назад">
    </form>
</body>
</html>