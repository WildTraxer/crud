<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <form method = "post"
    <table>
        <tr>
            <td> Поле для поиска </td>
            <td><input type="text" name="poisk" value="<?=$_POST['poisk']; ?>"></td>
            <td><input type="submit" name="submit" value="OK"></td>
        </tr>    
    </table>
</body>
</html>
<?php
include('connect.php');
$poisk = $_POST['poisk'];
$reset = $_post['reset'];
if (empty($poisk))
{
    $sql = "SELECT * FROM phone";
    $result = mysqli_query($link, $sql);
    echo '<table border=1>'.
        '<tr>'.
        '<td> Номер телефона </td>'.
        '<td> ФИО </td>'.
        '<td> Дата рождения </td>'.
        '<td> Регион </td>'.
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
    echo '<table border=1>'.
        '<tr>'.
        '<td> Номер телефона </td>'.
        '<td> ФИО </td>'.
        '<td> Дата рождения </td>'.
        '<td> Регион </td>'.
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