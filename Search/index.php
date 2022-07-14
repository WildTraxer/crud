<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <header class="header">
        <p class="header__logo font-family">CRUD</p>
    </header>
    <div class="wrapper">
        <form class="font-family" method="post">
            <div class="form-item">
                <p class="form-item__p">Поле для поиска</p>
                <input class="form-item__input" type="text" name="poisk" value="<?= $_POST['poisk']; ?>" />
                <input class="btn" type="submit" name="submit" value="OK" />
            </div>
        </form>
    </div>
</body>

</html>

<?php
include('connect.php');
$poisk = $_POST['poisk'];
$reset = $_post['reset'];
if (empty($poisk)) {
    $sql = "SELECT * FROM phone";
    $result = mysqli_query($link, $sql);
    echo '<table border=1>' .
        '<tr>' .
        '<td> Номер телефона </td>' .
        '<td> ФИО </td>' .
        '<td> Дата рождения </td>' .
        '<td> Регион </td>' .
        '</tr>';
    while ($row = mysqli_fetch_array($result)) {
        echo
        '<tr>' .
            "<td> {$row['Phone']}</td>" .
            "<td> {$row['FIO']}</td>" .
            "<td> {$row['DateBirth']}</td>" .
            "<td> {$row['Region']}</td>" .
            '</tr>';
    }
    echo '</table>';
} else {
    $sqllike = "SELECT * FROM phone WHERE Phone LIKE '%$poisk%' OR FIO LIKE '%$poisk%' OR DateBirth LIKE '%$poisk%' OR Region LIKE '%$poisk%'";
    $res = mysqli_query($link, $sqllike);
    echo '<table border=1>' .
        '<tr>' .
        '<td> Номер телефона </td>' .
        '<td> ФИО </td>' .
        '<td> Дата рождения </td>' .
        '<td> Регион </td>' .
        '</tr>';
    while ($row1 = mysqli_fetch_array($res)) {
        echo
        '<tr>' .
            "<td> {$row1['Phone']}</td>" .
            "<td> {$row1['FIO']}</td>" .
            "<td> {$row1['DateBirth']}</td>" .
            "<td> {$row1['Region']}</td>" .
            '</tr>';
    }
    echo '</table>';
}
?>