<?php
    include 'connect.php';
    $sql1 = "INSERT INTO `phone`(`Phone`, `FIO`, `DateBirth`, `Region`) VALUES ('88005553555','Мона Лиза','1519-04-17','32')";// Данные коректны и были добавлены в базу данных
    $sql2 = "INSERT INTO `phone`(`Phone`, `FIO`, `DateBirth`, `Region`) VALUES ('89534568512','Червяков Андрей Генадъевич','1967-03-22')"; // Данные не были добавлены в таблицу,т.к был пропущен регион
    $sql2 = "INSERT INTO `phone`(`Phone`, `FIO`, `DateBirth`, `Region`) VALUES ('89993216458','Прохоров Евгений Павлович','09-06-1984','67')";// Данные не были добавлены в таблицу, ошибка формы Data(При добавлении данных произошла ошибка: Incorrect date value: '09-06-1984' for column 'DateBirth' at row 1)
    $result1 = mysqli_query($link, $sql1);
    $result2 = mysqli_query($link, $sql2);
    $result3 = mysqli_query($link, $sql3);
    if ($result) {
    echo "Данные добвлены";
    } else {
    echo "При добавлении данных произошла ошибка: " . mysqli_error($link);
    exit;
    }
    if ($result2) {
        echo "Данные добвлены";
        } else {
        echo "При добавлении данных произошла ошибка: " . mysqli_error($link);
        exit;
        }
    if ($result3) {
        echo "Данные добвлены";
        } else {
        echo "При добавлении данных произошла ошибка: " . mysqli_error($link);
        exit;
         }    
    mysqli_close($link);
?>