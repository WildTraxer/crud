<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Добавление в таблицу данных телефон</title>
</head>
<body>
    <h1>Добавление данных в таблицу телефон</h1>
    <form action="insert.php" method="post" name="action">
        <table>
            <tr>
                <td>Введите Номер телефона</td>
                <td><input type="int" name="Phone"></td>
            </tr>
            <tr>
                <td>Введите ФИО</td>
                <td><input type="text" name="FIO"></td>
            </tr>
            <tr>
                <td>Введите Дату рождения</td>
                <td><input type="date" name="DateBirth"></td>
            </tr>
            <tr>
                <td>Введите Регион</td>
                <td><input type="int" name="Region"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Добавить данные">
                    <input type="reset" value="Очистить форму">
                </td>
            </tr>

        </table>
    </form>
</body>
</html>