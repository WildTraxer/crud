<?php
    include 'connect.php';
    if (isset($_GET['del_code'])){
        $sql_delete = "DELETE FROM phone WHERE Phone = {$_GET['del_code']}";
        $result_delete = mysqli_query ($link, $sql_delete);
        if ($result_delete) {
            header('Location: index.php');
        } else {
            echo '<p>Произошла ошибка:    '   .mysqli_error($link)  . '</p>';
        }
    }   
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Редактирование </title>
    </head>
<body>
    <h2> Таблица "NomerPhone" </h2>
        <table border=1>
            <tr>
            <td> Номер телефона </td>
            <td> ФИО </td>
            <td> Дата рождения </td>
            <td> Регион </td>  
            <td> Удаление </td>
            <td> Редактирование </td>
            </tr>
            <?php
            $sql_phone = "SELECT Phone, FIO, DateBirth, Region FROM phone";    
            $result_phone = mysqli_query($link, $sql_phone);
            while ($row_phone = mysqli_fetch_array($result_phone)) {
                echo '<tr>' . 
                "<td>{$row_phone['Phone']}</td>" .
                "<td>{$row_phone['FIO']}</td>" .
                "<td>{$row_phone['DateBirth']}</td>" .
                "<td>{$row_phone['Region']}</td>" .
                "<td><a href=' ? del_code={$row_phone['Phone']}'> Удалить </a></td>".
                "<td><a href='testupdate.php ? red_code={$row_phone['Phone']}'> Изменить </a></td>".
                '</tr>';
        }
        ?>
</table>
</body> 
</html>            
