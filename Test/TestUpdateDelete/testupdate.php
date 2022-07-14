<?php
include 'connect.php';

    //Если переменная название передана
    if (isset($_POST['Phone'])) {
        //Если это запрос на обновление, то обновляем
        if (isset($_GET['red_code'])) {
            $sql_update = " UPDATE phone SET FIO = '{$_POST['FIO']}', DateBirth = '{$_POST['DateBirth']}', Region = '{$_POST['Region']}' WHERE Phone = {$_GET['red_code']}";
            $result_update = mysqli_query($link, $sql_update);
        }
        if ($result_update) {
            echo '<p> Успешно! </p>';
        } else {
            echo '<p> Произошла ошибка: ' . mysqli_error($link) . '</p>';
        }
    }

    if (isset($_GET['red_code'])) {
        $sql_select = "SELECT FIO, DateBirth, Region FROM phone WHERE Phone = {$_GET['red_code']}";
        $result_select = mysqli_query($link, $sql_select);
        $row = mysqli_fetch_array($result_select);
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title> Редактирование </title>
        </head>
        <body>
            <form action="" method="post">
                <table>
                    <tr>
                    <td> Номер телефона </td>
                    <td><input type="text" name="Phone" value="<?=isset($_GET['red_code']) ? $row['Phone'] : ''; ?>"></td>
                    </tr>
                    <td> ФИО </td>
                    <td><input type="text" name="FIO" value="<?=isset($_GET['red_code']) ? $row['FIO'] : ''; ?>"></td>
                    </tr>
                    <td> Дата рождения </td>
                    <td><input type="date" name="DateBirth" value="<?=isset($_GET['red_code']) ? $row['DateBirth'] : ''; ?>"></td>
                    </tr>
                    <td> Регион </td>
                    <td><input type="int" name="Region" value="<?=isset($_GET['red_code']) ? $row['Region'] : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Сохранить"></td>
                    </tr>      
                </table>
            </form>
            </table>
            <form action="header.php" method="post">
                <input type="submit" value="Вернуться назад">
            </form>
        </body>
</html>                
